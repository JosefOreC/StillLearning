<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get','post'], '/contacto', function(){
    return "Hola desde la pagina de contacto get y post";
});

Route::get('/cursos/informacion', function(){
    return "Ingrese a este link para más informacion.";
})->name('cur.info');



#Route::get('/cursos/{curso}', function($curso){
#    return "Bienvenido al curso $curso";
#});

#Route::get('/cursos/{curso}/{categoria}', function($curso, $categoria){
#    return "Bienvenido al curso $curso y es de la categoria $categoria";
#});

Route::get('/cursos/{curso}/{categoria?}', function($curso, $categoria=null){
    if ($categoria){ 
        return "Bienvenido al curso $curso que es de la categoria $categoria";
    }else{ 
        return "Bienvenido al curso $curso";
    }
})->whereIn('curso', ['4', 'laravel']);



Route::get('/cursos/{id}', function($id){
    return "Curso con id: $id";
});


Route::prefix('posts')->group(function(){

    Route::get('/', function(){
        return "Hola desde la pagina principal de posts";
    });

    Route::get('/create', function(){
        return "Hola desde la pagina para crear posts";
    });

    Route::post('/', function(){
        return "Hola desde la pagina para guardar los posts";
    });

    Route::get('/{post}', function($post){
        return "Aqui se mostrará el post: $post";
    });

    Route::get('/{post}/edit', function($post){
        return "Aqui estará el formulario para editar el post: $post";
    });

    Route::put('/{post}', function($post){
        return "Aqui se mostrará el post: $post";
    });

    Route::delete('/{post}', function ($post) {
        return "Aqui se eliminará el post: $post";
    });

});
