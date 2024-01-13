<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use App\Models\User;
use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index(){
        $mobil = Mobil::all();
        $user = User::all()->first();
        $sewa = Sewa::all();
        // dd($user);
        return view('admin.dashboard', ['mobil' => $mobil, 'user' => $user, 'sewa' => $sewa ]);

    }

    public function create(){
        $user = Auth::user();

        return view('admin.addmobil', [ 'user' => $user]);
    }

    public function store(Request $request){

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

    public function edit($id){
        $mobil = Mobil::find($id);
        return view('admin.edit', ['mobil' => $mobil]);
    }

    public function update(Request $request, $id){
        $mobil = Mobil::find($id);
        $mobil->merk = $request->merk;
        $mobil->model = $request->model;
        $mobil->nomor_plat = $request->nomor_plat;
        $mobil->tarif = $request->tarif;
        $mobil->status = $request->status;
        $mobil->tanggal_awal_ready = $request->tanggal_awal_ready;
        $mobil->tanggal_akhir_ready = $request->tanggal_akhir_ready;
        $mobil->image = $request->image;
        if ($request->hasFile('image')) {
            if (File::exists(public_path($mobil->image))) {
                File::delete(public_path($mobil->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image/mobil'), $imageName);
            $mobil->image = 'image/mobil/' . $imageName;
        }

        $mobil->save();
        return redirect('/dashboard');
    }

    public function delete($id){
        $mobil = Mobil::find($id);

        if (File::exists(public_path($mobil->image))) {
            File::delete(public_path($mobil->image));
        }

        $mobil->delete();
        return redirect('/dashboard');
    }
}
