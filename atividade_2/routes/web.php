<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::prefix('/aluno')->group(function() {

    Route::get('/', function (){
        $dados = array(
            "Igor Broza",
            "Gil Eduardo",
            "Murilo Amancio",
            "Lucas Kayure",
            "Daph Alves"
            );

        $alunos = "<ul>";

        $cont = 0;

        foreach($dados as $nome) {
            $alunos .= "<li>$nome</li>";
            $cont++;
        }

        return $alunos;
    });

    Route::get('/limite/{total}', function($total) {

        $dados = array(
            "Igor Broza",
            "Gil Eduardo",
            "Murilo Amancio",
            "Lucas Kayure",
            "Daph Alves"
            );

        $alunos = "<ul>";

        $cont = 0;

        foreach($dados as $nome) {
            $alunos .= "<li>$nome</li>";
            $cont++;
            if($cont >= $total) break;
        }

    return $alunos;
    });

    Route::get('/matricula/{matricula}', function ($matricula){
        $dados = array(
            "Igor Broza",
            "Gil Eduardo",
            "Murilo Amancio",
            "Lucas Kayure",
            "Daph Alves"
            );

        $cont = 0;

        foreach($dados as $nome) {
            $alunos .= "<li>$nome</li>";
            $cont++;
        }

        return $alunos;
    });
});
