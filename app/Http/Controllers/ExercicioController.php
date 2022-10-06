<?php

namespace App\Http\Controllers;

use App\Entity\Exercicio;
use App\Model\Facade\ExercicioDB;
use App\Model\Facade\GrupoMuscularDB;
use App\Model\Regras\AlunoRegras;
use App\Model\Regras\ExercicioRegras;
use Exception;
use Illuminate\Http\Request;

class ExercicioController extends Controller
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
        try {
            ExercicioRegras::salvar($request);
            return response()->json(["mensagem" => "Exercicio Cadastrado"]);
        } catch (Exception $ex) {
            return response()->json([$ex->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $exercicios = ExercicioDB::listarExercicio();
        return response()->json($exercicios);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            ExercicioRegras::alterar($request);
            return response()->json(['mensagem'=>'exercicio alterado com sucesso']);
        } catch (Exception $ex) {
            return response()->json(['mensagem' => 'Não foi possivel realizar sua chamado, por favar, tente mais tarde' . PHP_EOL . $ex->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        
        try {
            ExercicioRegras::excluir($id);
            return response()->json(['mensagem' => 'Exercicio excluido com sucesso']);
        } catch (Exception $ex) {
            return response()->json(['mensagem' => 'Não foi possoivel realizar a exclusão nesse momento' . PHP_EOL . $ex->getMessage()]);
        }

    }
    
    
        
    
}
