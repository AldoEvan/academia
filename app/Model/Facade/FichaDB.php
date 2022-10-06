<?php

namespace App\Model\Facade;

use App\Model\Entity\Exercicio;
use App\Model\Entity\Ficha;
use Illuminate\Support\Facades\DB;

class FichaDB
{
    public static function listarfichas($request)
    {
        $sql = DB::table("ficha as f")
            ->join("aluno as a", "f.fk_aluno", "=", "a.id")
            ->join("professor as p", "f.fk_professor", "=", "p.id")
            ->select([
                'f.*',
                'a.deleted_at as deletado',
                'a.nome as aluno',
                'p.nome as professor'
            ])
            ->whereNull('f.deleted_at')
            ->whereNull('a.deleted_at')
            ->orderBy('a.nome');
        //->get();

        if (!empty($request->aluno)) {
            $sql->where("a.nome", 'ilike', "%$request->aluno%");
        }

        return $sql->get();
    }
}
