<?php

use App\Http\Controllers\PomodoroController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// ROTA PARA IR NO INDEX DO SITE
Route::get('/', [SiteController::class, 'index'])->name('site.index');

//CONFIGURAÇÂO DO POMODORO
Route::get('/config',function(){
    return view('config');
})->name('pomo.config');

// SALVAR CONFIGURAÇÔES DO POMODORO
Route::post('/config',[PomodoroController::class,'config'])->name('pomo.setConfig');

// INICIAR O POMODORO
Route::post('start',[PomodoroController::class,'start'])->name('pomo.start');