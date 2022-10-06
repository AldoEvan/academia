<?php

namespace App\Http\Controllers;

use App\Model\Facade\AlunoDB;
use App\Model\Facade\FichaDB;
use App\Model\Facade\FichaExercicioDB;
use App\Model\Facade\ProfessorDB;
use Illuminate\Http\Request;

class FichatreinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   //dd($id);
        $exercicios = FichaExercicioDB::exibirexercicios($id);
        $fichas = FichaExercicioDB::exerciciosFichaDB($id);

        $fichas->exercicios = $exercicios;
        return response()->json($fichas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exercicios = FichaExercicioDB::exibirexercicios($id);
        $ficha = FichaExercicioDB::exerciciosFichaDB($id);
        $professores = ProfessorDB::comboProfessor();
        $alunos = AlunoDB::comboAluno();

        return compact('exercicios', 'ficha', 'professores', 'alunos');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
