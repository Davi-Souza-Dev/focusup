<?php

namespace App\Http\Controllers;

use App\Models\Pomodoro;
use App\Models\Tag;
use Cron\DayOfWeekField;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class PomodoroController extends Controller
{

    public function config(Request $request)
    {
        //PEGANDO AS CONFIGURAÇÔES PASSADAS
        $icon = $request->rdIcon;
        $tag = Tag::find($request->rdTag);
        $timer = $request->rdTimer;
        //VOLTANDO A VIEW
        return view('index', compact('icon', 'tag', 'timer'));
    }
    //Iniciar o pomodoro
    public function start(Request $request)
    {
        //PEGANDO AS CONFIGURAÇÔES PASSADAS
        $icon = $request->icon;
        $tag = $request->tag;
        $timer = $request->timer;
        //VOLTANDO A VIEW
        return view('pomoStart', compact('icon', 'tag', 'timer'));
    }
    //SALVAR UM POMODORO COMPLETO OU NÃO
    public function save(Request $request)
    {
        //PEGANDO AS CONFIGURAÇÔES PASSADAS
        $idUser = Auth::user()->id; //PEGANDO O ID DO USUARIO LOGADO
        
        $icon = $request->timerIcon;
        $tag = $request->timerTag != 0 ? $request->timerTag : 1;
        $timer = $request->timeTimer;
        $done = $request->done == 'true' ? 1 : 0;
        
        //CONFIGURANDO O DIA DA SEMANA
        date_default_timezone_set('America/Sao_Paulo');
        $date = getdate();
        $diasSemana = array(1 => "Seg", 2 => "Ter", 3 => "Qua", 4 => "Qui", 5 => "Sex", 6 => "Sáb", 0 => "Dom");
        $day = $diasSemana[$date['wday']];

        // SALVANDO OS DADOS
        Pomodoro::create([
            'timer' => $timer,
            'day' => $day,
            'created' => date('H:i'),
            'done' => $done,
            'id_user' => $idUser,
            'id_tag' => $tag,
        ]);
        
        //VOLTANDO A VIEW
         return view('index');
    }
}
