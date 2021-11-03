<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\Aluminio;

class AluminioController extends Controller
{
     public function index(){
     	$aluminios = Aluminio::all();

     	//$aluminios = Aluminio::where('Gender','Mujer')->
     	//			orderBy('Name')->get();
    	
    		return view('menu.aluminio')->with([
    		'aluminio'=>$aluminios]);
    }
 

    public function detalle($Id){
    	$aluminio = Aluminio::findOrFail($Id);

    	return view('aluminio.detalle')->with([
    		'aluminio'=>$aluminio]);
    } 


    public function crear()
    {
        return view('aluminios.crear');
    }

    public function insert()
    {
        $aluminios = Aluminio::create(request()->all());
        dd("ya se insertó");
    }

}