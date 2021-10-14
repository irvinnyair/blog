<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;

//Almacenar consulta SQL en cache
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function index(){

        //Verficamos si existe en cache la informacion de una pagina (Pagina 1 o 2 o 4 o 5 o ....)
        if (request()->page) {
            $key = 'posts' . request()->page;
        } else {
            $key = 'posts';
        }
        

        //Verificamos si ya existe en cache, el archvio o variable que buscamos se llama posts
        if (Cache::has($key)) {

            //Si existe la consulta, recuperamos la informacion
            $posts = Cache::get($key);
        } else {
            //Si no existe, realizamos la consulta a la BD 
            $posts = Post::where('status', 2)->latest('id')->paginate(8);

            //Guardamos en cache
            Cache::put($key, $posts);
        }
        
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){

        $this->authorize('published', $post);
        
        $similares = Post::where('category_id' , $post->category_id)
                            ->where('status', 2)
                            ->where('id', '!=' , $post->id)
                            ->latest('id') // Ordener en forma descendente
                            ->take(4) //Cuatro post relacionados
                            ->get(); //se crea la recioan
        return view('posts.show', compact('post', 'similares'));
    }

    public function category(Category $category){

        $posts = Post::where("category_id", $category->id)
                        ->where('status', 2)
                        ->latest('id')
                        ->paginate(6);
                        
        return view('posts.category', compact('category', 'posts'));
    }

    public function tag(Tag $tag){
        $posts = $tag->posts()->where('status', 2)->latest('id')->paginate(10);

        return view('posts.tag', compact('posts', 'tag'));
    }
}
