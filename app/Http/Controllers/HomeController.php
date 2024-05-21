<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //cuando una clase tiene un unico metodo, se le llama por el metodo invoke
    public function __invoke(){
        return "Bienvenido a la pagina principal";
    }
}
