<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SiteController extends Controller
{
    // VAI PARA A PÁGNIA INICIAL
    public function index()
    {
        $page = 1;
        return view('index', compact('page'));
    }

    // VAI PARA A PÁGINA DO TO DO LIST
    public function todolist(){
        $page = 2;
        // PEGA AS TASK NÃO CONCLUIDAS E DO USUARIO LOGADO
        $tasks = Todolist::all();
        // dd($tasks);
        return view('index', compact('page','tasks'));
    }
}
