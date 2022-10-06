<?php

namespace App\Model\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Professor extends Model
{
    use SoftDeletes;
    protected $table = "professor";
    protected $primaryKey = "id";

    public $timestamp = false;
}
