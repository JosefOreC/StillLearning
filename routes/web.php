<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use PHPUnit\Framework\Attributes\PostCondition;

Route::get('/', HomeController::class);

Route::match(['get','post'], '/contacto', function(){
    return "Hola desde la pagina de contacto get y post";
});

Route::get('/cursos/informacion', function(){
    return "Ingrese a este link para más informacion.";
})->name('cur.info');

/*Route::controller(PostController::class)->group(function(){
    Route::get('posts', [PostController::class, 'index'])->name('posts.index');

    Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');

    Route::post('posts', [PostController::class, 'store'])->name('posts.store');

    Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

    Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');

    Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});*/

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

Route::resource('articulos', PostController::class)->parameters(['articulos'=>'posts'])->names('posts');

Route::prefix('posts')->name('posts.')->controller(PostController::class)->group(function(){

    /*Route::get('/', 'index')->name('posts.index');

    Route::get('/create', 'create')->name('posts.create');

    Route::post('/', 'store')->name('posts.store');

    Route::get('/{post}', 'show')->name('posts.show');

    Route::get('/{post}/edit', 'edit')->name('posts.edit');

    Route::put('/{post}', 'update')->name('posts.update');

    Route::delete('/{post}', 'destroy')->name('posts.destroy');*/

});
