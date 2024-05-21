<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        return "Welcome to de posts page";
    }

    public function create(){
        return "Aqui se vera el formulario para crear un post";
    }

    public function show($id){
        return "Welcome to de post $id page";
    }
    
}
