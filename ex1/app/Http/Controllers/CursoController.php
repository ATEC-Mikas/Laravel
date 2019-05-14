<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    private function curso($i) {
        $curso=array();
        $curso["id"]=$i+1;
        $curso["nome"]="Teste".$i;
        $curso["tema"]="Tema".$i;
        $curso["desc"]="Lorem Ipsum Bacalhau á brás".$i;
        return $curso;
    }

    private function seed() {
        $r= [];
        for($i=0;$i<6;$i++){
            array_push($r,$this->curso($i));
        }
        return $r;
    }

    function index()
    {
        return view("curso/index")->with("cursos",$this->seed());
    }

    function inscrever($id) {
        return view("curso/inscrever")->with("curso",$this->curso(intval($id)-1));
    }
}
