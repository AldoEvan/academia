<?php

namespace App\Model\Entity;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model
{   
    use SoftDeletes;
    protected $table = "aluno";
    protected $primaryKey = "id";

    public $timestamp = false;
    //protected $dates = ['deleted_at'];
}
