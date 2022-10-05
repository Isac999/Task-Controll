<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;
    protected $fillable = ['tarefa', 'user_id', 'data_limite_conclusao'];
}
