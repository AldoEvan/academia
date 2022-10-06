<?php

namespace App\Model\Facade;

use App\Model\Entity\Ficha;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FichaExercicioDB
{
    public static function exerciciosFichaDB($id)
    {   
        $sql = DB::table('ficha as f')
            ->join('professor as p' , 'f.fk_professor', '=', 'p.id')
            ->join('aluno as a' , 'f.fk_aluno', '=', 'a.id')
            ->select([
                'f.id',
                'f.inicio',
                'f.termino',
                'f.observacao',
                'f.fk_professor',
                'p.nome as professor',
                'f.fk_aluno',
                'a.nome as aluno'
            ])
            ->whereNull('f.deleted_at')
            ->where('f.id', '=', $id);
            return $sql->first();

    }

    public static function exibirexercicios($id)
    {
        $sql = DB::table('fichaexercicio as fe')
            ->join('exercicio as e' , 'fe.fk_exercicio', '=', 'e.id')
            ->select([
                'fe.id',
                'fe.series',
                'fe.repeticoes',
                'fe.intervalo',
                'fe.peso',
                'e.id',
                'e.nome as exercicio',
                'e.descricao as descricao'
            ])
            ->where('fe.fk_ficha', '=', $id);
            return $sql->get();

    }

}
