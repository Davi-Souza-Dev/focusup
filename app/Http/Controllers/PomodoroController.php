<?php

namespace App\Http\Controllers;

use App\Models\Pomodoro;
use Cron\DayOfWeekField;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PomodoroController extends Controller
{

    public function config(Request $request)
    {
        //PEGANDO AS CONFIGURAÇÔES PASSADAS
        $icon = $request->rdIcon;
        $tag = $request->rdTag;
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
        $icon = $request->timerIcon;
        $tag = $request->timerTag;
        $timer = $request->timeTimer;
        $done = $request->done;

        //CONFIGURANDO O DIA DA SEMANA
        date_default_timezone_set('America/Sao_Paulo');
        $date = getdate();
        $diasSemana = array(1 => "Seg", 2 => "Ter", 3 => "Qua", 4 => "Qui", 5 => "Sex", 6 => "Sáb", 0 => "Dom");
        $day = $diasSemana[$date['wday']];

        // SALVANDO OS DADOS
 
        //VOLTANDO A VIEW
        //  return view('index',compact('icon','tag','timer'));
    }
}
