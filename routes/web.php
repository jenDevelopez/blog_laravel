<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
Route::get('/',HomeController::class);
Route::get('/posts',[PostsController::class,'index']);
Route::get('/posts/create',[PostsController::class,'create']);
Route::get("/posts/{id}", [PostsController::class,'show']);

//con parametro opcional
/*
Route::get("/posts/{id}/{category?}", function($id,$category=null){
    if($category){
        return "Welcome to de post $id page in $category category";
    }else{
        return "Welcome to de post $id page";
    }

});
*/