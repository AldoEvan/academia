<?php

namespace App\Model\Regras;

use App\Model\Entity\FichaExercicio;
use App\Model\Entity\Ficha;
use App\Model\Facade\FichaExercicioDB;

class FichaExercicioRegras
{
    public static function salvar($request)
    {;
        $ficha = new Ficha();
        $ficha->fk_aluno = $request->fk_aluno;
        $ficha->fk_professor = $request->fk_professor;
        $ficha->inicio = $request->inicio;
        $ficha->termino = $request->termino;
        $ficha->objetivo = $request->objetivo;
        $ficha->observacao = $request->observacao;
        $ficha->save();
        //dd($ficha->id);


        //$fichaExercicio->id
        $exercicios = $request->exercicios;

        foreach ($exercicios as $indice => $exercicio) {
            $fichaExercicio = new FichaExercicio();
            $fichaExercicio->fk_ficha = $ficha->id; 
            $fichaExercicio->fk_exercicio = $exercicio;
            $fichaExercicio->series = $request->series[$indice];
            $fichaExercicio->repeticoes = $request->repeticoes[$indice];
            $fichaExercicio->intervalo = $request->descansos[$indice];
            $fichaExercicio->peso = $request->peso[$indice];
            $fichaExercicio->save();
        };
    }

    public static function alterar($request)
    {
        $fichaExercicio = Ficha::find($request->id);
        $fichaExercicio->fk_aluno = $request->fk_aluno;
        $fichaExercicio->fk_professor = $request->fk_professor;
        $fichaExercicio->inicio = $request->inicio;
        $fichaExercicio->termino = $request->termino;
        $fichaExercicio->objetivo = $request->objetivo;
        $fichaExercicio->observacao = $request->observacao;
        $fichaExercicio->save();

        $exercicios = [];
        foreach ($exercicios as $exercicio) {
            $exercicio = new FichaExercicio();
            $exercicio->fk_ficha = $fichaExercicio->id;
            $exercicio->fk_exercicio = $request->exercicio;
            $exercicio->series = $request->series;
            $exercicio->repeticoes = $request->repeticoes;
            $exercicio->intervalo = $request->intervalo;
            $fichaExercicio->peso = $request->peso;
            $exercicio->save();
        }
    }

    public static function excluir($id)
    {
        $fichaExercicio = Ficha::find($id);
        $fichaExercicio->delete();
    }
}
