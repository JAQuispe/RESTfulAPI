<?php namespace App\Http\Controllers;
use app\MiModelo;
class MiControlador extends Controller{


	function index(){
	    $modelo=new MiModelo();
	    $resultado=$modelo->saludar("Jose");
	    return view("Prueba.index",["saludo" =>$resultado]);
	}
}