<?php

namespace App\Model\Regras;

use App\Model\Entity\Aluno;

class AlunoRegras
{
    public static function salvar($request)
    {   //dd($request);
        $aluno = new Aluno();
        $aluno->nome = $request->nome;
        $aluno->dt_nascimento = $request->dt_nascimento;
        $aluno->matricula = $request->matricula;
        $aluno->peso = $request->peso;
        $aluno->altura = $request->altura;
        $aluno->atestado_medico = $request->atestado_medico;
        $aluno->email = $request->email;
        $aluno->save();
    }

    public static function alterar($request)
    {   
        $aluno = Aluno::find($request->id);
        $aluno->nome = $request->nome;
        $aluno->matricula = $request->matricula;
        $aluno->altura = $request->altura;
        $aluno->peso = $request->peso;
        $aluno->atestado_medico = $request->atestado_medico;
        $aluno->save();
    }

    public static function excluir($id)
    {   
        $aluno = Aluno::find($id);
        //dd($aluno);
        $aluno->delete();
    }
}
