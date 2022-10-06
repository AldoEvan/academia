<?php

namespace App\Http\Controllers;

use App\Model\Facade\GrupoMuscularDB;
use App\Model\Regras\GrupoMuscularRegras;
use Exception;
use Illuminate\Http\Request;

class GrupomuscularController extends Controller
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
        //dd($request);
        try {
            GrupoMuscularRegras::salvar($request);
            return response()->json(["mensagem" =>"Grupo Muscular Cadastrado"]);
        } catch (Exception $ex) {
            return response()->json(["mensagem" => "Tente mais tarde"]);
            //throw $th;
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
        $gm = GrupoMuscularDB::listarGM();
        return response()->json($gm);

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
            GrupoMuscularRegras::editar($request);
            return response()->json(["mensagem" => "Grupo Muscular alterado"]);
        } catch (Exception $ex) {
            return response()->json([$ex->getMessage()]);
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
            GrupoMuscularRegras::excluir($id);
            return response()->json(["mensagem" => "Grupo Muscular excluido"]);
        } catch (Exception $ex) {
            return response()->json(["mensagem" => "Tente mais tarde"]);
        }
    }
}
