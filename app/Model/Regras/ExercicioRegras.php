<?php

namespace App\Model\Regras;

use App\Model\Entity\Exercicio;
use App\Model\Facade\ExercicioDB;

class ExercicioRegras
{
    public static function salvar($request)
    {
        $exercicio = new Exercicio();
        $exercicio->nome = $request->nome;
        $exercicio->descricao = $request->descricao;
        $exercicio->fk_grupomuscular = $request->fk_grupomuscular;
        $exercicio->save();
    }
    public static function alterar($request)
    {   
        $exercicio = ExercicioDB::getExercicio($request->id);
        $exercicio->nome = $request->nome;
        $exercicio->descricao = $request->descricao;
        $exercicio->fk_grupomuscular = $request->fk_grupomuscular;
        $exercicio->save();
    }

    public static function excluir($id)
    {   
        $exercicio = Exercicio::find($id);
        //dd($id);
        $exercicio->delete();
    }

}
