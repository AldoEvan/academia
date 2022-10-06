<?php

namespace App\Model\Facade;

use App\Model\Entity\Exercicio;
use Illuminate\Support\Facades\DB;

class ExercicioDB
{
    public static function listarExercicio()
    {
        return DB::table("exercicio as e")
            ->join("grupomuscular as g", "e.fk_grupomuscular", "=", "g.id")
            ->select([
                'e.*',
                'g.nome as grupomuscular'
            ])
            ->whereNull('e.deleted_at')
            ->get();
    }
    
    public static function getExercicio($id)
    {
        return Exercicio::find($id);
    }

    public static function getExercicioGM($grupomuscular)
    {
        return Exercicio::Where("fk_grupomuscular" , $grupomuscular)->get();
    }

}
