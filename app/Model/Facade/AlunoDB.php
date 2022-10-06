<?php

namespace App\Model\Facade;

use App\Model\Entity\Aluno;

class AlunoDB
{
    public static function listarAlunos($nome)
    {   
        $sql = Aluno::orderBy('nome');

        if(!empty($nome)) {
        $sql->where("nome", 'ilike', "%$nome%");

        }
        return $sql->get();

    }

    public static function comboAluno()
    {
        $sql = Aluno::all('id','nome');
        $sql->where('deleted_at', '=' , 'null');
        return $sql;
    
    }
    
    public static function getAluno($id)
    {
        $aluno = Aluno::find($id);
        return $aluno;
    }



}
