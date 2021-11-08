<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Categoria extends Controller
{
    function index($ci){
        dd('por'.$ci);

    }
    function fotro(){}
    function create(){

        $Dato=['info'=>'888'];
        $midato='el otro';
        //return view('categoria/formulario',['midato'=>'informacion']);        
        return view('categoria/formulario',compact('Dato','midato'));
    }
    function conPost(Request $request){
        $_REQUEST['nombre'];
        dd($request->input('nombre'));

    }
}
