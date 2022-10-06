<?php

namespace App\Http\Controllers;

use App\Model\Facade\ProfessorDB;
use App\Model\Regras\ProfessorRegras;
use Exception;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //dd($request);
        try {
            ProfessorRegras::salvar($request);
            return response()->json(["mensagem" => "Professor Cadastrado"]);
        } catch (Exception $ex) {
            return response()->json([$ex->getMessage()]);
        }
    }

    public function show(Request $request)
    {   //dd("salvar");
        $professor = ProfessorDB::listarProfessor($request->nome);
        return response()->json($professor);
    }

    public function edit($cref)
    {
    }

    public function update(Request $request)
    {
        try {
            ProfessorRegras::alterar($request);
        } catch (Exception $ex) {
            return response()->json(["mensagem" => "Professor Alterado"]);
        }
    }

    public function destroy($id)
    {
        try {
            ProfessorRegras::excluir($id);
            return response()->json(["mensagem" => "Aluno Excluido"]);
        } catch (Exception $ex) {
            return response()->json(["mensagem" => "Não foi possivel excluir o aluno"]);
        }
    }

}
