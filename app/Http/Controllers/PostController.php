<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "Hola desde la pagina de posts";
    }

    public function create(){
        return "Aqui estará el formulario para la creación de posts";
    }

    public function store(){
        return "Aqui se procesará el formulario de creación de posts";
    }

    public function show($post){
        return "Aqui se mostrará el post: $post";
    }

    public function edit($post){
        return "Aqui se mostrará el formulario para la edición del post: $post";
    }

    public function update($post){
        return "Aqui se procesará el formulario para la edición del post: $post";
    }

    public function destroy($post){
        return "Aqui se eliminará el post: $post";
    }

}
