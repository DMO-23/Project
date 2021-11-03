<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\Herraje;

class HerrajeController extends Controller
{
     public function index(){
     	$herrajes = Herraje::all();

     	//$aluminios = Aluminio::where('Gender','Mujer')->
     	//			orderBy('Name')->get();
    	
    		return view('menu.herraje')->with([
    		'herraje'=>$herrajes]);
    }
 

    public function detalle($Id){
    	$herraje= Herraje::findOrFail($Id);

    	return view('herraje.detalle')->with([
    		'herraje'=>$herraje]);
    }


    public function crear()
    {
        return view('herrajes.crear');
    }

    public function insert()
    {
        $herrajes = Herraje::create(request()->all());
        dd("ya se insertó");
    }

}