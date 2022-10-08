<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Mail\sendMail;
use Illuminate\Support\Facades\Mail;
use Illumate\Contracts\View\View;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('welcome', ['posts' => $posts]);
    }

    public function detailPost(Post $post)
    {
        return view('detail', ['post' => $post]);
    }

    public function viewEmail()
    {
        return view('sendemail');
    }

    // Добавление поиска
    public function search(Request $request){

        $query = $request->input('query');

        $searched_items = Post::where('title', 'like', "%$query%")->get();

        return view('search_page', compact('searched_items'));

    }

    public function create(){

        return view('create');
    }

   
}
