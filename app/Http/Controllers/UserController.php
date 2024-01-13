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

    public function pinjam(Request $request, $id)
    {
        $mobil = Mobil::find($id);
        $user_id = Auth::user()->id;



        return view('user.pinjam', ['mobil' => $mobil]);
    }

    public function showUser()
    {
        $user_id = Auth::user()->id;
        $data_pinjam = Sewa::where('user_id', $user_id)->get();

        return view('user.showUser', ['data_pinjam' => $data_pinjam]);
    }
}
