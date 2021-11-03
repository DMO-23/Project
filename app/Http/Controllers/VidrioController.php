<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\Vidrio;

class VidrioController extends Controller
{
     public function index(){
     	$vidrios = Vidrio::all();

     	//$aluminios = Aluminio::where('Gender','Mujer')->
     	//			orderBy('Name')->get();
    	
    		return view('menu.vidrio')->with([
    		'vidrio'=>$vidrios]);
    }
 

    public function detalle($Id){
    	$vidrio = Vidrio::findOrFail($Id);

    	return view('vidrio.detalle')->with([
    		'vidrio'=>$vidrio]);
    }


    public function crear()
    {
        return view('vidrios.crear');
    }

    public function insert()
    {
        $vidrios = Vidrio::create(request()->all());
        dd("ya se insertó");
    }

}