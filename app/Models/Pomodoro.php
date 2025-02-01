<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pomodoro extends Model
{
    use HasFactory;

    protected $fillable = [
        'timer',
        'day',
        'done',
        'created',
        'id_user',
        'id_tag'
    ];

    // RELACIONAMENTO DE USUARIO
    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }

    // RELACIONAMENTO DE TAG
    public function tag(){
        return $this->belongsTo(Tag::class,'id_tag');
    }
}
