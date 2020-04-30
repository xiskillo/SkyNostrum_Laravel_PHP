<?php

namespace skynostrum\Http\Controllers;

use Illuminate\Http\Request;
use skynostrum\Productos;
use skynostrum\Http\Requests\ProductosRequest;

class ProductosController extends Controller
{
    public function index(){

        $productos=Productos::paginate(5);
        
        
        
        return view('productos.index', compact('productos'));
       // dd($productos);

    }



    public function show(Productos $producto){

        
        return view('productos.detail', compact('producto'));

    }


    public function create(Productos $producto){
        
       
        $producto=new Productos;
        return view('productos.create', compact('producto'));
        
        

    }

    /*
    public function store(ProductosRequest $req){
        
        Productos::create(request()->input());
        return back()->with('creacion', ['success', 'Producto Creado']);

        /*
        $this->validate($req,[
            'nombre'=>'required',
            'codigo'=>'required',
            'stock'=>'required'
        ]);
        $x = Productos::create($req->all());
        // $company = Company::latest()->first();
        if ($x){
            return view('productos.edit')->with('creacion', ['success' , 'OK']);
        }
        else{
            return view('productos.edit')->with('creacion', ['success' , 'MAL']);
        }
        }
        */

   

    public function store(){
        $this->validate(request(), [

            'codigo' => 'required|numeric|max:9999',
            'nombre' => 'required|min:2|max:50',
            'stock' => 'required|numeric|max:10000',
            'precio' => 'required|numeric|max:99999',           
    
            ]);
        //ProductosRequest $req arriba
        

       // $req->merge(['attachment' => $filename]);

       if(request()->hasFile('file') && request()->file('file')->isValid()){
        $filename=uploadFile('file','productos');
        request()->merge(['attachment'=> $filename]);
       }

        Productos::create(request()->input());
        return back()->with('creacion', ['success', 'Producto Creado']);

        

    }



    public function edit($id){

       
        //$route=route('productos.update', ['id'=> $id]);
        
        $producto=Productos::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }


    public function update($id){
        $this->validate(request(), [

            'codigo' => 'required|numeric|max:9999',
            'nombre' => 'required|min:2|max:50',
            'stock' => 'required|numeric|max:10000',
            'precio' => 'required|numeric|max:99999',           
    
            ]);


        $producto=Productos::findOrFail($id);
        $producto->fill(request()->input())->save();
        return back()->with('creacion', ['success', 'Edición Satisfactoria']);
    }

    public function destroy($id){

        //$producto=Productos::findOrFail($id);
       // $producto->delete();
      
      // $id->delete();
      $p=Productos::find($id);
      $p->delete();
        
        return back()->with('creacion', ['success', 'Borrado Satisfactorio']);
    }




    
}
