<?php

namespace App\Model\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FichaExercicio extends Model
{
    use SoftDeletes;
    protected $table = "fichaexercicio";
    protected $primaryKey = "id";

    public $timestamps = "false";
}
