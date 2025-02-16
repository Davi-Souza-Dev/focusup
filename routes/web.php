<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PomodoroController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// ROTAS DO SITE
Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::get('/todolist', [SiteController::class, 'todolist'])->name('site.todolist');

Route::get('/login',function(){
    return view('loginForm');
})->name('login.form');

// ROTAS PARA LOGIN
Route::post('/auth',[LoginController::class,'auth'])->name('login.auth');

// |--- POMODORO ---|
Route::get('/config',function(){
    return view('pomodoro.config'); //CONFIGURAÇÂO DO POMODORO
})->name('pomo.config');
// SALVAR CONFIGURAÇÔES DO POMODORO
Route::post('/config',[PomodoroController::class,'config'])->name('pomo.setConfig');
// INICIAR O POMODORO
Route::post('/start',[PomodoroController::class,'start'])->name('pomo.start');
// SALVAR O POMODORO INICIADO
Route::post('/save',[PomodoroController::class,'save'])->name('pomo.save');

// |--- To Do List ---|

