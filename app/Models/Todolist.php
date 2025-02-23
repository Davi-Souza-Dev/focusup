<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    use HasFactory;
    protected $fillable = [
        "id_user",
        "task_name",
        "task_prio",
        "task_done"
    ];

    public function idUser(){
        return $this->belongsTo(User::class,"id_user");
    }
}
