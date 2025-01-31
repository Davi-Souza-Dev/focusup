<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PomodoroController extends Controller
{
    public function config(Request $request){
        //PEGANDO AS CONFIGURAÇÔES PASSADAS
        $icon = $request->rdIcon;
        $tag = $request->rdTag;
        $timer = $request->rdTimer;
        //VOLTANDO A VIEW
        return view('index',compact('icon','tag','timer'));
    }
    //Iniciar o pomodoro
    public function start(Request $request){
            //PEGANDO AS CONFIGURAÇÔES PASSADAS
            $icon = $request->icon;
            $tag = $request->tag;
            $timer = $request->timer;
            //VOLTANDO A VIEW
            return view('pomoStart',compact('icon','tag','timer'));
    }
    //SALVAR UM POMODORO COMPLETO OU NÃO
    public function save(Request $request){
        return redirect()->route('site.index');
    }
}
