<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{

    public function home()
    {

        return view('home');

    }

    /*In the case you want to iterate something in a view you can make the array here and then iterate it*/


    public function blog()
    {

        /*With an array*/

        // $posts = [

        //     ['id' => 1, "Title" => "Las aventuras de Php", "Slug" => "php"],
        //     ['id' => 2, "Title" => "Las aventuras de Java", "Slug" => "java"],
        //     ['id' => 3, "Title" => "Las aventuras de C#", "Slug" => "csharp"],
        //     ['id' => 4, "Title" => "Las aventuras de JavaScript", "Slug" => "js"],

        // ];

        /*With a Database Consult there is multiple ways to do it*/
        //$post = Post::get();
        //$post = Post::find(15);
        //$post = Post::first();
        // dd($post); In this case you can print the values like var_dump() only that is design for laravel

        $post = Post::latest()->paginate();


        return view('blog', ['posts' => $post]);

    }
/*In the case you want to search by the value in the search bar you can do it by the syntax 
{} after the /*/
    public function post(Post $post)
    {


        return view('post', ['post' => $post]);

    }

}