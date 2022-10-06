<?php

namespace App\Model\Regras;

use App\Model\Entity\GrupoMuscular;
use App\Model\Facade\GrupoMuscularDB;
use Illuminate\Database\Eloquent\Model;

class GrupoMuscularRegras
{
    public static function salvar($request)
    {
        $gm = new GrupoMuscular();
        $gm->nome = $request->nome;
        $gm->save();
    }

    public static function editar($request)  
    {
        $gm = GrupoMuscular::find($request->id);
        $gm->nome = $request->nome;
        $gm->save();
    }

    public static function excluir($id)
    {
        $gm = GrupoMuscular::find($id);
        $gm->delete();
        
    }
}
