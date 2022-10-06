<?php

namespace App\Model\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ficha extends Model
{
    use SoftDeletes;
    protected $table = "ficha";
    protected $primaryKey = "id";

    public $timestamp = "false";
    
}
