<?php

namespace App\Model\Regras;

use App\Model\Entity\Professor;
use App\Model\Facade\ProfessorDB;

class ProfessorRegras
{
    public static function salvar($request)
    {
        $professor = new Professor();
        $professor->nome = $request->nome;
        $professor->cref = $request->cref;
        $professor->email = $request->email;
        $professor->cargo = $request->cargo;
        $professor->save();
    }

    public static function alterar($request)
    {   
        $professor = Professor::find($request->id);
        $professor->nome = $request->nome;
        $professor->cref = $request->cref;
        $professor->email = $request->email;
        $professor->cargo = $request->cargo;
        $professor->save();
    }
    public static function excluir($id)
    {
        $professor = Professor::find($id);
        $professor->delete();
    }
}
