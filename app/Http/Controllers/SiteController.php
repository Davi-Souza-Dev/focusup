<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SiteController extends Controller
{
    // VAI PARA A PÁGNIA INICIAL
    public function index()
    {
        $page = 1;
        return view('index',compact('page'));
    }

    public function todolist(){
        $page = 2;
        return view('index',compact('page'));
    }
}
