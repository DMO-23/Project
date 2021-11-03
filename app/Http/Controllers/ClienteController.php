<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\ClienteModel; 
use App\Entities\ProductoModel;
use Barryvdh\DomPDF\Facade;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $productos = ProductoModel::select('*')->get();
        $clientes = ClienteModel::select('*');
        $limit=(isset($request->limit)) ? $request->limit:10;

        if(isset($request->search)){
            $clientes = $clientes->where('idCliente','like', '%'.$request->search.'%')
            ->orWhere('nombre','like', '%'.$request->search.'%')
            ->orWhere('apellidoPaterno', 'like', '%'.$request->search.'%')
            ->orWhere('apellidoMaterno', 'like', '%'.$request->search.'%')
            ->orWhere('rfc', 'like', '%'.$request->search.'%')
            ->orWhere('telefono', 'like', '%'.$request->search.'%')
            ->orWhere('correo', 'like', '%'.$request->search.'%')
            ->orWhere('direccion', 'like', '%'.$request->search.'%')
            ->orWhere('idProducto', 'like', '%'.$request->search.'%');



        }
        $clientes= $clientes->paginate($limit)->appends($request->all());
        return view('clientes.index', compact('clientes'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = ProductoModel::select('*')->get();
        return view('clientes.create', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = new ClienteModel();
        $clientes = $this->createUpdateClientes($request,$clientes);
        return  redirect()
        ->route('clientes.index')
        ->with('message', 'se ha creado el registro correctamente');
    }

    public function createUpdateClientes(Request $request, $clientes){
        $clientes->nombre = $request->nombre;
        $clientes->apellidoPaterno = $request->apellidoPaterno;
        $clientes->apellidoMaterno = $request->apellidoMaterno;
        $clientes->rfc = $request->rfc;
        $clientes->telefono = $request->telefono;
        $clientes->correo = $request->correo;
        $clientes->direccion = $request->direccion;
        $clientes->idProducto = $request->idProducto;
        $clientes->save();
        return $clientes;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($clientes)
    {
        $clientes = ClienteModel::where('idCliente', $clientes)->firstOrFail();
        $productos = ProductoModel::select('*')->get();
        return view('clientes.show', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($clientes)
    {
        $clientes = ClienteModel::where('idCliente', $clientes)->firstOrFail();
        $productos = ProductoModel::select('*')->get();
        return view('clientes.edit', compact('clientes','productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $clientes)
    {
        $clientes = ClienteModel::where('idCliente', $clientes)->firstOrFail();
        $clientes = $this->createUpdateClientes($request,$clientes);
        return  redirect()
        ->route('clientes.show', $clientes)
        ->with('message', 'se ha creado el registro correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($clientes)
    {
        $clientes = ClienteModel::findOrFail($clientes);
        $clientes->delete();
        return redirect()
        ->route('clientes.index')
        ->with('message', 'se ha eliminado el registrocorrectamente');
    }
    public function exportPDF(){
        $clientes = ClienteModel::get();
        $pdf = Facade::loadView('clientes.exportPDF', compact('clientes'));


        //linea para mostar hoja en horizaontal
        $pdf->setPaper('a4', 'landscape');

        //liena para descargar pdf
        //return $pdf->download('proveedores.pdf');

        //linea para mostar en navegador
        return $pdf->stream();
  
    }



}