<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', HomeController::class);

// Route::get('/posts', [PostController::class, "index"])->name("posts.index");

// Route::get('/posts/create', [PostController::class, "create"])->name("posts.create");

// Route::post('/posts', [PostController::class, "store"])->name("posts.store");

// Route::get('/posts/{post}', [PostController::class, "show"])->name("posts.show");

// Route::get('/posts/{post}/edit', [PostController::class, "edit"])->name("posts.edit");

// Route::put('/posts/{post}', [PostController::class, "update"])->name("posts.update");

// Route::delete('/posts/{post}', [PostController::class, "destroy"])->name("posts.destroy");

Route::resource('posts', PostController::class);

// Route::resource('articulos', PostController::class)->parameters(['articulos' => 'post'])->names('posts');
// Route::resource('posts', PostController::class)->only(['index', 'create']);


/*
Route::get('/post/{post}/{category}', function($post, $category){
    return "AQUI SE MOSTRARA EL POST {$post} DE LA CATEGORIA {$category}";
});
*/
Route::get('prueba', function(){
    /*
    CREAR REGISTRO
    $post = new Post;

    $post -> title = "Titulo de prueba 2";
    $post -> content = "Contenido de prueba 2";

    $post -> save();

    return $post;
    */


    /*
    LISTAR 1 SOLO REGISTRO Y ACTUALIZAR REGISTRO
    // $post = Post::find(1);

    $post = Post::where("title", "Titulo de prueba 2")->first();

    $post->content = "Desarrollo web";

    $post->save();

    return $post;
    */


    /*
    LISTAR REGISTROS
    // $post = Post::where("id", ">=", "2")->get();

    // $post = Post::orderBy("title", "desc")->get();

    // METODO TAKE() -> CANTIDAD DE REGISTROS
    $post = Post::orderBy("title", "desc")->select("id", "title")->take(2)->get();

    return $post;
    */


    /*
    ELIMINAR REGISTRO
    $post = Post::find(1);

    $post -> delete();

    return "ELIMINADO";
    */

    /*
    CAST
    $post = Post::find(1);

    return $post->published_at->format("d-m-y");
    */

    

    
});


