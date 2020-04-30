<?php

namespace skynostrum\Http\Controllers;

use Illuminate\Http\Request;
use skynostrum\Clientes;

use Barryvdh\DomPDF\Facade as PDF;


class ClientesController extends Controller
{
    public function index(){

        $clientes=Clientes::paginate(3);
        
        
        
        return view('clientes.index', compact('clientes'));
       // dd($productos);

    }

    public function show($id){

        $cliente=Clientes::findOrFail($id);
        return view('clientes.detail', compact('cliente'));

    }
    

    public function create(){

        $cliente=new Clientes;
        return view('clientes.create', compact('cliente'));

    }


    public function store(){

        $this->validate(request(), [

        'nombre' => 'required|min:2|max:75',
        'apellidos' => 'required|min:2|max:200',
        'direccion' => 'required|min:2|max:300',
        'ciudad' => 'required|min:2|max:20',
        'cp' => 'required|numeric|max:99999',    

        ]);




        

        Clientes::create(request()->input());
        return back()->with('creacion', ['success', 'Cliente Registrado']);

    }


    public function edit($id){

       
        //$route=route('productos.update', ['id'=> $id]);
        
        $cliente=Clientes::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }


    public function update($id){

        $this->validate(request(), [

            'nombre' => 'required|min:2|max:75',
            'apellidos' => 'required|min:2|max:200',
            'direccion' => 'required|min:2|max:300',
            'ciudad' => 'required|min:2|max:20',
            'cp' => 'required|numeric|max:99999', 
    
            ]);

        $cliente=Clientes::findOrFail($id);
        $cliente->fill(request()->input())->save();
        return back()->with('creacion', ['success', 'Edición Satisfactoria']);
    }



    public function destroy($id){

        //$producto=Productos::findOrFail($id);
       // $producto->delete();
      
      // $id->delete();
      $c=Clientes::find($id);
      $c->delete();
        
        return back()->with('creacion', ['success', 'Borrado Satisfactorio']);
    }


    public function pdf()
    {        
        
        $clientes = Clientes::all(); 

        $pdf = PDF::loadView('pdf.clientes', compact('clientes'));

        return $pdf->download('listado_clientes.pdf');
    }



    



}
