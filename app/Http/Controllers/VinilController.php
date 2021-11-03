<?php

namespace App\Http\Controllers;

use App\Vidrio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\Vinil;

class VinilController extends Controller
{
     public function index(){
     	$viniles = Vinil::all();

     	//$aluminios = Aluminio::where('Gender','Mujer')->
     	//			orderBy('Name')->get();
    	
    		return view('menu.vinil')->with([
    		'vinil'=>$viniles]);
    }
 

    public function detalle($Id){
    	$vinil = Vinil::findOrFail($Id);

    	return view('vinil.detalle')->with([
    		'vinil'=>$vinil]);
    }


    public function crear()
    {
        return view('vinil.crear');
    }

    public function insert()
    {
        $viniles = Vinil::create(request()->all());
        dd("ya se insertó");
    }

}