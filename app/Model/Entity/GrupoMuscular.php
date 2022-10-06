<?php

namespace App\Model\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrupoMuscular extends Model
{
    use SoftDeletes;
    protected $table = "grupomuscular";
    protected $primaryKey = "id";

    public $timestamp = false;
}
