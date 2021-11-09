<?php

namespace App\Http\Controllers;
use App\models\CategoriaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Categoria extends Controller
{
    function index($ci){
        dd('por'.$ci);

    }
    function fotro(){}
    function create(){

        $t=DB::table('categoria')->where('estado','>',1)->toSql();
        $consulta=DB::select(DB::
        raw("select * from categoria where nombre= :nombre"),['nombre'=>'pepito']);
        dd($consulta);
        //select *from categoria
        //$datos=CategoriaModel::all();
        //select *from categoria where  nombre='cat' limit 2
        $datos=CategoriaModel::where('nombre','cat')->where('1','1')->get();//>all();
        $datos=CategoriaModel::get()->toJson();//>all();
        //dd($datos);

        $cat=new CategoriaModel();
        $cat->nombre='pepito';
        $cat->borrar='123';
        $cat->estado=1;
        //insert into categoria(...) values (...);
        $cat->save();
        echo "*** id=".$cat->id." ****";

        $catEdit = //CategoriaModel::find(4);
        CategoriaModel::where('id',4)->first();

        
        $catEdit->nombre='maria2222';
        $catEdit->estado=2;
        $catEdit->save();
        
        //CategoriaModel::find(5)->delete();
        //}catch(Exceptions $e){}
        CategoriaModel::destroy(6);
        CategoriaModel::destroy([7,8,9,10,11]);

        dd($catEdit);

        dd($datos);
        print_r("******////// no mostrara esto");
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
/*
Tarea 2
*   Crear un proyecto en laravel,configurar la base de datos "Super", 
    crear 2 controladores que tengan 2 funciones y deben mostran en html "Hola mundo #"
    con uso de vistas.
*   Crea otro proyecto en laravel, configura la base de datos "Bloqueo",
    Crea un controlador que tenga las funciones "uno" y "dos", que inserten en la 
    tabla persona(nombre,edad) y borrar una persona(mandar por parametro el id)
     respectivamente.
    para el jueves a 15:00
    github-> url
*/