<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // -- Menampilkan halaman Login --
    function index()
    {

        // logikanya disini ya
        return view('login');
    }
    // -- otentikasi --
    function autheticate(Request $request)
    {   
        //die($request->getContent()); // -- data body form --
        // -- validasi form input--
        $validasi = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        //-- proses otentikasi --
        if(Auth::attempt($validasi)){
            $request->session();
            return redirect()->intended('/');
        }

        // -- menampilkan dashboard, apabila ter-otentikasi --
        //return back()->with('error', 'Login gagal');
        return "Wrong pass";
    }
}
