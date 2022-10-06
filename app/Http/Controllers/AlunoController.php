<?php

namespace App\Http\Controllers;

use App\Model\Entity\Aluno;
use App\Model\Facade\AlunoDB;
use App\Model\Regras\AlunoRegras;
use Exception;
use Illuminate\Http\Request;

class AlunoController extends Controller
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
    public function listar(Request $request)
    {   
        //$aluno = AlunoDB::listarAlunos();
        $alunos = AlunoDB::listarAlunos($request->nome);
        //dd($request->nome);
        return response()->json($alunos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = (object) $request->all();
        //dd($dados);
        
        try {
            AlunoRegras::salvar($dados);
            return response()->json(["mensagem" => "Aluno Cadastrado"]);
        } catch (Exception $ex) {
            return response()->json(["error" => $ex->getMessage()]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        try {
            $aluno = AlunoDB::getAluno($id);
            return response()->json($aluno);
        } catch (Exception $ex) {
            return response()->json(["ERROR" => "Erro Alterar Aluno, tente mais tarde"]);
        }
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

        //$dados = (object) $request->all();
        try { 
            AlunoRegras::alterar($request);
            return response()->json(["mensagem" => "Aluno Alterado"]);

        } catch (Exception $ex) {
            return response()->json(["ERROR" => "Erro Alterar Aluno, tente mais tarde ".$ex->getMessage()]);
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
            AlunoRegras::excluir($id);
            return response()->json(["mensagem" => "Aluno Excluido"]);
        } catch (Exception $ex) {
            return response()->json(["ERROR" => "Erro ao Excluir Aluno, tente mais tarde"]);
        }
    }

    // public function search(Request $request)
    // {
    //     $pesquisar = AlunoDB::getAlunoPorNome($request->nome);
    //     return response()->json($pesquisar);
    // }
}
