<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Welcome to de home page";
});



Route::get('/posts', function () {
    return "Welcome to de posts page";
});

Route::get("/posts/{id}/{category?}", function($id,$cateogory=null){
    return "Welcome to de post $id page";
});

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