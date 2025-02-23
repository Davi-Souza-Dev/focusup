<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth(Request $request){

        // DIFININDO AS CREDENCIAIS
        $credentials = $request->validate([
            'email'=> ['required', 'email'],
            'password' => ['required']
        ]);

        // FAZENDO O LOGIN
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('site.index');
        }else{
            return redirect()->back()->with('error','email ou senha invalidos');
        }

    }
}
