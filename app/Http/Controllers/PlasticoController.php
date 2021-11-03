<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\Plastico;

class PlasticoController extends Controller
{
     public function index(){
     	$plasticos = Plastico::all();

     	//$aluminios = Aluminio::where('Gender','Mujer')->
     	//			orderBy('Name')->get();
    	
    		return view('menu.plastico')->with([
    		'plastico'=>$plasticos]);
    }
 

    public function detalle($Id){
    	$plastico = Plastico::findOrFail($Id);

    	return view('plastico.detalle')->with([
    		'plastico'=>$plastico]);
    }


    public function crear()
    {
        return view('plasticos.crear');
    }

    public function insert()
    {
        $plasticos = Plastico::create(request()->all());
        dd("ya se insertó");
    }

}