<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use App\Models\User;
use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $mobils = Mobil::all();
        return view('welcome', ['mobils' => $mobils]);
    }

    public function show($id)
    {
        $mobil = Mobil::find($id);
        // dd($mobil->image);
        return view('user.show', ['mobil' => $mobil]);
    }

    public function sewa(Request $request, $id)
    {
        $mobil = Mobil::find($id);
        $user_id = Auth::user()->id;
        $awal_sewa = $request->input('awal_sewa');
        $akhir_sewa = $request->input('akhir_sewa');

        // dd($awal_sewa);
        $sewa = Sewa::create([
            'user_id' => $user_id,
            'mobil_id' => $mobil->id,
            'status' => 'Disewa',
            'awal_sewa' => $awal_sewa,
            'akhir_sewa' => $akhir_sewa,
        ]);

        $mobil->status = 'Disewa';
        $mobil->save();

        return view('user.show', [
            'mobil' => $mobil,
            'pesan' => "Berhasil Menyewa Mobil {$mobil->merk} dengan Tipe {$mobil->model}"
        ]);
    }


    public function showUser()
    {
        $user_id = Auth::user()->id;
        $data_pinjam = Sewa::where('user_id', $user_id)->get();

        return view('user.showUser', ['data_pinjam' => $data_pinjam]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $mobils = Mobil::whereRaw('LOWER(merk) LIKE ?', ['%' . strtolower($search) . '%'])
            ->orWhereRaw('LOWER(model) LIKE ?', ['%' . strtolower($search) . '%'])
            ->orWhereRaw('LOWER(nomor_plat) LIKE ?', ['%' . strtolower($search) . '%'])
            ->orWhereRaw('LOWER(status) LIKE ?', ['%' . strtolower($search) . '%'])
            ->get();

        // dd($mobils);

        return view('user.search', ['mobils' => $mobils]);
    }

    public function profile()
    {
        $user = Auth::user();
        $sewas = Sewa::where('user_id', $user->id)->get();

        // Menggunakan loop untuk mendapatkan mobil dan tanggal terkait untuk setiap sewa
        $dataSewas = [];
        foreach ($sewas as $sewa) {
            $mobil = Mobil::find($sewa->mobil_id);
            if ($mobil) {
                $dataSewas[] = [
                    'merk' => $mobil->merk,
                    'model' => $mobil->model,
                    'awal_sewa' => $sewa->awal_sewa, // Sesuaikan dengan nama kolom awal_sewa di tabel Sewa
                    'akhir_sewa' => $sewa->akhir_sewa,
                    'status' => $sewa->status, // Sesuaikan dengan nama kolom tanggal di tabel Sewa
                ];
            }
        }

        // dd($dataSewas);

        return view('user.profile', ['user' => $user, 'dataSewas' => $dataSewas]);
    }

    public function edit(){
        $user = Auth::user();
        return view('user.edit', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'nomor_sim' => $request->nomor_sim,
        ];

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($user->image) {
                Storage::delete('public/image/user/' . $user->image);
            }

            // Upload new image
            $imageName = $request->file('image')->store('public/image/user');
            $data['image'] = basename($imageName);
        }

        // Check if password is provided and update it
        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        }

        // dd($data);
        $user->update($data);

        return redirect('/profile');
    }

}
