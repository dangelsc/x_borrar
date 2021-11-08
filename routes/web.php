<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Categoria;
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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/cat/{nombre}/datos/{ci}/{edad}',function($nombre,$ci,$edad){
    $a=5*56;    
    echo 'este es el dato que neviaste->'.$nombre.'<br>';
    echo 'ci->'.$ci.'<br>';
    echo 'edad->'.$edad.'<br>';
    echo $a;
});
Route::get('/cat2',function(){
    $a=5*56;    
    return view('prueba');
});
Route::get('/cat3/{ci}',[Categoria::class,'index']);
Route::post('/cat5',[Categoria::class,'conPost']);
Route::get('/cat4',[Categoria::class,'fotro']);
//Route::get('/cat5','Categoria@index');
//method ->post,get,-->put,delete...
Route::resource('categoria',Categoria::class);
//get->index
//get->create
//post->store/
//get->edit
//put->update
//get->show
//delete->destroy