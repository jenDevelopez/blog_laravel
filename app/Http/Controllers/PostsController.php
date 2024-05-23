<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        return  view('posts.index');
    }

    public function create(){
        return view('posts.create');
    }

    public function show($id){
        // para enviar variables a la vista se puede hacer mediante un array
      /*  return view('posts.show',[
            'id' => $id
        ]);
    */
    //o mediante la funcion compact
    return view('posts.show',compact('id'));
    }
    
}
