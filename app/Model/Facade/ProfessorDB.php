<?php

namespace App\Model\Facade;

use App\Model\Entity\Professor;

class ProfessorDB
{
    public static function listarProfessor($nome)
    {
        $sql = Professor::orderBy('nome', 'asc');
        if (!empty($nome)) {
            $sql->where("nome", 'ilike', "%$nome%");
        }

        return $sql->get();
    }

    public static function getProfessor($id)
    {
        return Professor::find($id);
    }

    public static function comboProfessor()
    {
        return Professor::all('id','nome');
    }

    public static function getProfessorCref($cref)
    {
        return Professor::where("matricula", $cref)->first();
    }
}
