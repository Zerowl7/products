<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Mail\sendMail;
use Illuminate\Support\Facades\Mail;
use Illumate\Contracts\View\View;
use App\Http\Requests\PostsRequest;


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


    // Создаем посты
    public function store(PostsRequest $request)
    {
$content  = $request->has('content_blog') ? $request->get('content_blog') : 'ошибка';


        $data = (request()->all());
        $post = new Post();
        $post->title = $request->get('title');
        $post->content = $content;
        $post->save();
        return $post;

    }

   
}
