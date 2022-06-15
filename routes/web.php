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

    Route::get('/matricula/{matricula}', function($matricula){
        $dados = array(
            array("matricula" => 1, "nome" => "Igor Broza", "nota" => 2),
            array("matricula" => 2, "nome" => "Gil Eduardo", "nota" => 2),
            array("matricula" => 3, "nome" => "Murilo Amancio", "nota" => 5),
            array("matricula" => 4, "nome" => "Lucas Kayure", "nota" => 2),
            array("matricula" => 5, "nome" => "Daph Alves", "nota" => 2),
        );

        $alunos = "<ul>";

        foreach($dados as $arr) {
            if($arr['matricula'] == $matricula){ 
            $alunos .= "<li>".$arr['nome']."</li>";
            }
        }

        return $alunos;
    });

    Route::get('/nome/{nome}', function($nome){ 
        $dados = array(
            array("matricula" => 1, "nome" => "Igor Broza", "nota" => 2),
            array("matricula" => 2, "nome" => "Gil Eduardo", "nota" => 2),
            array("matricula" => 3, "nome" => "Murilo Amancio", "nota" => 5),
            array("matricula" => 4, "nome" => "Lucas Kayure", "nota" => 2),
            array("matricula" => 5, "nome" => "Daph Alves", "nota" => 2),
        );

        $alunos = "<ul>";

        foreach($dados as $arr) {
            if($arr['nome'] == $nome){ 
            $alunos .= "<li>".$arr['nome']."</li>";
            }
        }


        return $alunos;
    });
});

Route::prefix('/nota')->group(function(){

    Route::get('/', function(){ 
        $dados = array(
            array("matricula" => 1, "nome" => "Igor Broza", "nota" => 2),
            array("matricula" => 2, "nome" => "Gil Eduardo", "nota" => 2),
            array("matricula" => 3, "nome" => "Murilo Amancio", "nota" => 5),
            array("matricula" => 4, "nome" => "Lucas Kayure", "nota" => 2),
            array("matricula" => 5, "nome" => "Daph Alves", "nota" => 2),
        );

        $alunos = "<ul>";

        $cont = 0;

        foreach($dados as $arr) {
            $alunos .= "<li>".$arr['nota']."</li>";
            $cont++;
        }

        return $alunos;
    });

    

    Route::get('/limite/{total}', function($total){
        $dados = array(
            array("matricula" => 1, "nome" => "Igor Broza", "nota" => 2),
            array("matricula" => 2, "nome" => "Gil Eduardo", "nota" => 2),
            array("matricula" => 3, "nome" => "Murilo Amancio", "nota" => 2),
            array("matricula" => 4, "nome" => "Lucas Kayure", "nota" => 2),
            array("matricula" => 5, "nome" => "Daph Alves", "nota" => 2),
        );
        
        $alunos = "<ul>";

        $cont = 0;

        foreach($dados as $arr) {
            $alunos .= "<li>".$arr['nota']."</li>";
            $cont++;
            if($cont >= $total) break;
        }

    return $alunos;
    });

    Route::get('/lancar/{nota}/{matricula}/{nome?}', function($nota, $matricula, $nome=null){
        $dados = array(
            array("matricula" => 1, "nome" => "Igor Broza", "nota" => 2),
            array("matricula" => 2, "nome" => "Gil Eduardo", "nota" => 2),
            array("matricula" => 3, "nome" => "Murilo Amancio", "nota" => 2),
            array("matricula" => 4, "nome" => "Lucas Kayure", "nota" => 2),
            array("matricula" => 5, "nome" => "Daph Alves", "nota" => 2),
        );

        $indice = array_search($matricula, array_column($dados, 'matricula'));
        

        $dados[$indice]['nota'] = $nota;
        

        // Armazena os dados do cliente para o índice obtido
        $dados = $aux[$indice];

        $alunos = "<ul>";

        $cont = 0;

        foreach($dados as $arr) {
            $alunos .= "<li>".$arr['nota']."</li>";
            $cont++;
        }

        return $alunos;
    });

});