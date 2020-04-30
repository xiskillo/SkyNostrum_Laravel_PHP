<?php

namespace skynostrum\Http\Controllers;

use skynostrum\Noticias;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    //
    public function index(){

        $noticias=Noticias::paginate(10);
        return view('noticias.index', compact('noticias'));

    }


    public function show(Noticias $noticia){

        return view('noticias.detail', compact('noticia'));

    }

    public function create(){

        
        $route=route('noticias.store');
        
        $noticia=new Noticias;
        return view('noticias.create', compact('route','noticia'));
    }


    public function store(){
        $this->validate(request(), [

            'titulo' => 'required|min:1|max:75',
            'contenido' => 'required|min:2|max:1000'            
    
            ]);

        request()->merge(['user_id'=> auth()->id()]);

        if(request()->hasFile('file') && request()->file('file')->isValid()){
            $filename=uploadFile('file','noticias');
            request()->merge(['attachment'=> $filename]);
           }

       Noticias::create(request()->input());

       // dd(request()->all());

        return back()->with('creacion', ['success', 'Noticia Creada']);
    }



    public function edit($id){

       
        //$route=route('productos.update', ['id'=> $id]);
        
        $noticia=Noticias::findOrFail($id);
        return view('noticias.edit', compact('noticia'));
    }



    public function update($id){

        $this->validate(request(), [

            'titulo' => 'required|min:1|max:75',
            'contenido' => 'required|min:2|max:1000'            
    
            ]);

        $noticia=Noticias::findOrFail($id);
        $noticia->fill(request()->input())->save();
        return back()->with('creacion', ['success', 'Edición Satisfactoria']);
    }


    public function destroy($id){

        
      $noticia=Noticias::find($id);
      $noticia->delete();
        
        return back()->with('creacion', ['success', 'Borrado Satisfactorio']);
    }
}
