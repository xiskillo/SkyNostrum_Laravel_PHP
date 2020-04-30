<?php

namespace skynostrum\Http\Controllers;

use Illuminate\Http\Request;
use skynostrum\Ventas;
use skynostrum\Clientes;
use skynostrum\Productos;

use Barryvdh\DomPDF\Facade as PDF;

class VentasController extends Controller
{
    //

    public function index(){

        $ventas=Ventas::paginate(10);
        return view('ventas.index', compact('ventas'));

    }




    public function show($id){

        $venta=Ventas::findOrFail($id);
        return view('ventas.detail', compact('venta'));

    }
    

    public function create(){

        $venta=new Ventas;
        $clientes=Clientes::all();
        $productos=Productos::all();
        return view('ventas.create', compact('venta','clientes','productos'));

    }


    public function store(){

        $this->validate(request(), [

        'clientes_id' => 'required',
        'productos_id' => 'required',
        'cantidad' => 'required|numeric|max:99',
        'observaciones' => 'required'

        ]);




        

        Ventas::create(request()->input());
        return back()->with('creacion', ['success', 'Venta Registrada']);

    }


    public function edit($id){

               
        
        $venta=Ventas::findOrFail($id);
        $clientes=Clientes::all();
        $productos=Productos::all();
        return view('ventas.edit', compact('venta','clientes','productos'));
    }


    public function update($id){

        $this->validate(request(), [

            'clientes_id' => 'required',
            'productos_id' => 'required',
            'cantidad' => 'required|numeric|max:99',
            'observaciones' => 'required'
    
            ]);

        $venta=Ventas::findOrFail($id);
        $venta->fill(request()->input())->save();
        return back()->with('creacion', ['success', 'Edición Satisfactoria']);
    }



    public function destroy($id){

      
      $venta=Ventas::find($id);
      $venta->delete();
        
        return back()->with('creacion', ['success', 'Borrado Satisfactorio']);
    }


    public function pdf()
    {        
        
        $ventas = Ventas::all(); 

        $pdf = PDF::loadView('pdf.ventas', compact('ventas'));

        return $pdf->download('listado_ventas.pdf');
    }
}
