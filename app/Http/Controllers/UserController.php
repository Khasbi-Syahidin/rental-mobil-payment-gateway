<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
