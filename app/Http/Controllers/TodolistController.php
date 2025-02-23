<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class TodolistController extends Controller
{
    
    // CRIAR UMA NOVA TASK
    public function addTask(Request $request){
        // dd($request);
        $taskContent = $request->taskContent;

        if(!empty($taskContent)){
            Todolist::create([
                'id_user' => Auth::user()->id,
                'task_name' => $taskContent,
            ]);
        }
        return back();
    }

    // COMPLETA UMA TASK
    public function doneTask(Request $request){
        // dd($request);
        $task = Todolist::find($request->taskId);
        $task->task_done = true;
        $task->save();

        return back();
    }

    // DELETAR UMA TASK
    public function deleteTask(Request $request){
        $task = Todolist::find($request->taskId);
        $task->delete();
        return back();
    }

    // Acoes de task
    public function taskActions(Request $request){  
        if($request->btnAction == "btnDone"){
            $this->doneTask($request);
        }

        if($request->btnAction == "btnDel"){
            $this->deleteTask($request);
        }

        return back();
    }
}
