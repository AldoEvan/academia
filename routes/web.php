<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Rotas Alunos

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/aluno/pesquisar/' , 'AlunoController@search');
Route::get('/aluno/listar-aluno' , 'AlunoController@listar');
Route::get('/aluno/editar/{id}', 'AlunoController@edit');

Route::post('/aluno/cadastrar', 'AlunoController@store');
Route::post('/aluno/alterar' , 'AlunoController@update');
Route::delete('/aluno/excluir/{id}' , 'AlunoController@destroy');


//Rotas do Professor

Route::get('/professor/listar-prof', 'ProfessorController@show');
Route::get('/professor/pesquisar' , 'ProfessorController@search');

Route::post('/professor/salvar' ,  'ProfessorController@store');
Route::post('/professor/alterar' , 'ProfessorController@update');
Route::delete('/professor/excluir/{id}', 'ProfessorController@destroy');

//Rotas do Grupo Muscular

Route::get('/gm/listargm' , 'GrupomuscularController@show');

Route::post('/gm/salvar' , 'GrupomuscularController@store');
Route::post('/gm/alterar' , 'GrupomuscularController@update');
Route::delete('/gm/excluir/{id}' , 'GrupomuscularController@destroy');



//Routas Exercicio

Route::get('/exercicio/listar-exe' , 'ExercicioController@show');
//Route::get('/exercicio/gm' , 'ExercicioController@gm');

Route::post('/exercicio/salvar' , 'ExercicioController@store');
Route::post('/exercicio/alterar' , 'ExercicioController@update');
Route::delete('/exercicio/excluir/{id}' , 'ExercicioController@destroy');


//Routas Ficha de Exercicio
Route::get('/ficha/listar-fe' , 'FichaDeExercicioController@show');
Route::post('/ficha/salvar' , 'FichaDeExercicioController@store');
Route::post('/ficha/alterar' , 'FichaDeExercicioController@update');
Route::delete('/ficha/excluir/{id}' , 'FichaDeExercicioController@destroy');

//Rotas ficha de treino

Route::get('/fichatreino/exibir-ficha/{id}' , 'FichatreinoController@show');
Route::get('/fichatreino/editar-ficha/{id}' , 'FichatreinoController@edit');
Route::get('/ficha/excluir/{id}' , 'FichaDeExercicioController@destroy');
