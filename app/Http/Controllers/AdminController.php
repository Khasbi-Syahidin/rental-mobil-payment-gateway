<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use App\Models\User;
use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index()
    {
        $mobil = Mobil::all();
        $user = Auth::user();
        $sewa = Sewa::all();
        // dd($user);
        return view('admin.dashboard', ['mobil' => $mobil, 'user' => $user, 'sewa' => $sewa]);
    }

    public function create()
    {
        $user = Auth::user();

        return view('admin.addmobil', ['user' => $user]);
    }

    public function store(Request $request)
    {

        $mobil = new Mobil();
        $mobil->merk = $request->merk;
        $mobil->model = $request->model;
        $mobil->nomor_plat = $request->nomor_plat;
        $mobil->tarif = $request->tarif;
        $mobil->status = $request->status;
        $mobil->tanggal_awal_ready = $request->tanggal_awal_ready;
        $mobil->tanggal_akhir_ready = $request->tanggal_akhir_ready;
        $mobil->image = $request->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image/mobil'), $imageName);
            $mobil->image = 'image/mobil/' . $imageName;
        }
        $mobil->save();
        return redirect('/dashboard/home');
    }

    public function edit($id)
    {
        $mobil = Mobil::find($id);
        return view('admin.editmobil', ['mobil' => $mobil, 'user' => Auth::user()]);
    }

    public function updatemobil(Request $request, $id)
    {
        $mobil = Mobil::find($id);
        $mobil->merk = $request->merk;
        $mobil->model = $request->model;
        $mobil->nomor_plat = $request->nomor_plat;
        $mobil->tarif = $request->tarif;
        $mobil->status = $request->status;
        $mobil->tanggal_awal_ready = $request->tanggal_awal_ready;
        $mobil->tanggal_akhir_ready = $request->tanggal_akhir_ready;
        if ($request->hasFile('image')) {
            $mobil->image = $request->image;
            if (File::exists(public_path($mobil->image))) {
                File::delete(public_path($mobil->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image/mobil'), $imageName);
            $mobil->image = 'image/mobil/' . $imageName;
        }

        $mobil->save();
        return redirect('/dashboard/index');
    }

    public function delete($id)
    {
        $mobil = Mobil::find($id);

        if (File::exists(public_path($mobil->image))) {
            File::delete(public_path($mobil->image));
        }

        $mobil->delete();
        return redirect('/dashboard/home');
    }


    public function transaction()
    {
        $dataSewas = Sewa::with('user', 'mobil')->get();
        $user = Auth::user();
        // dd($dataSewas);
        return view('admin.alltransaksi',  ['dataSewas' => $dataSewas, 'user' => $user]);
    }



    public function all()
    {
        $mobils = Mobil::all();
        return view('admin.allmobil', ['mobils' => $mobils, 'user' => Auth::user()]);
    }

    public function profileadmin()
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

    public function edittransaksi($id){
        $transaksi = Sewa::find($id);
        dd($transaksi);
        return view('admin.edittransaksi', ['transaksi' => $transaksi]);
    }
}
