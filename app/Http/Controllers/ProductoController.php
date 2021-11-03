<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\ProductoModel;
use App\Entities\ProveedorModel;
use Barryvdh\DomPDF\Facade;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $proveedor = ProveedorModel::select('*')->get();

        $productos = ProductoModel::select('*');
        $limit=(isset($request->limit)) ? $request->limit:10;
 if(isset($request->search)){
            $productos = $productos->where('idProducto','like', '%'.$request->search.'%')
              ->orWhere('nombre','like', '%'.$request->search.'%')
              ->orWhere('descripcion', 'like', '%'.$request->search.'%')
              ->orWhere('precio', 'like', '%'.$request->search.'%')
              ->orWhere('expiracion', 'like', '%'.$request->search.'%')
              ->orWhere('stock', 'like', '%'.$request->search.'%')
              ->orWhere('idProveedor', 'like', '%'.$request->search.'%');

        }
        $productos = $productos->paginate($limit)->appends($request->all());
        return view('productos.index', compact('productos'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedor = ProveedorModel::select('*')->get();
        return view('productos.create',compact('proveedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request   
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new ProductoModel();
        $producto = $this->createUpdateProducto($request, $producto);
        return redirect()
        ->route('productos.index')
        ->with('message', 'Se ha creado el registro correctamente');
    }

    public function createUpdateProducto(Request $request, $producto){
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->expiracion = $request->expiracion;
        $producto->stock = $request->stock;
        $producto->idProveedor = $request->idProveedor;
        $producto->save();
        return $producto;
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        
        $producto = ProductoModel::where('idProducto',$producto)->firstOrFail();
        $proveedores = ProveedorModel::select('*')->get();
        return view ('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        $producto = ProductoModel::where('idProducto',$producto)->firstOrFail();
        $proveedor = ProveedorModel::select('*')->get();
        return view ('productos.edit', compact('producto','proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $producto)
    {
        $producto = ProductoModel::where('idProducto',$producto)->firstOrFail();
        $producto = $this->createUpdateProducto($request, $producto);
        return redirect()
        ->route('productos.show', $producto)
        ->with('message', 'Se ha actualizado el registro correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($producto)
    {
        $producto = ProductoModel::findOrFail($producto);
        $producto->delete();
        return redirect()
        ->route('productos.index')
        ->with('message','Se ha eliminado el registro correctamente'); 
    }
    public function exportPDF(){
        $productos = ProductoModel::get();
        $pdf = Facade::loadView('productos.exportPDF', compact('productos'));


        //linea para mostar hoja en horizaontal
        $pdf->setPaper('a4', 'landscape');

        //liena para descargar pdf
        //return $pdf->download('proveedores.pdf');

        //linea para mostar en navegador
        return $pdf->stream();
  
    }

}