<?php

namespace App\Model\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exercicio extends Model
{
    use SoftDeletes;
    protected $table = "exercicio";
    protected $primaryKey = "id";

    public $timestamp = false;

   /*  public function grupoMuscular()
    {
        return $this->hasOne(GrupoMuscular::class, "fk_grupomuscular", "id");
    }
 */
}
