<?php

namespace App\Http\Controllers;

use App\Model\Facade\FichaDB;
use App\Model\Facade\FichaExercicioDB;
use App\Model\Regras\FichaExercicioRegras;
use Exception;
use Illuminate\Http\Request;

class FichaDeExercicioController extends Controller
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
        //dd($request->all());
        try {
            FichaExercicioRegras::salvar($request);
            return response()->json(["mensagem" => "Ficha Cadastrada com Sucesso"]);
        } catch (Exception $ex) {
            return response()->json([ $ex->getMessage()]); 
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $fichas = FichaDB::listarfichas($request);
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
            FichaExercicioRegras::alterar($request);
            return response()->json(["mensagem" => "Ficha alterada com sucesso"]);
            
        } catch (Exception $ex) {
            return response()->json(["mensagem" => "Ops, algo deu errado, tente mais tarde, deve ter sido culpa do estagiario" . $ex->getMessage()]); 
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
            FichaExercicioRegras::excluir($id);
            return response()->json(["mensagem" => "Ficha Exluida"]);
        } catch (Exception $ex) {
            return response()->json(["mensagem" => "Ops, algo deu errado, tente mais tarde, deve ter sido culpa do estagiario"]); 
        }
    }
}
