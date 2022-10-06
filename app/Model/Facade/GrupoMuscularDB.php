<?php

namespace App\Model\Facade;

use App\Model\Entity\GrupoMuscular;
use Illuminate\Database\Eloquent\Model;

class GrupoMuscularDB
{
    public static function listarGM()
    {
        return GrupoMuscular::orderBy('id','asc')->get();

    }

    public static function getGM($id)
    {
        return GrupoMuscular::find($id);
    }
}
