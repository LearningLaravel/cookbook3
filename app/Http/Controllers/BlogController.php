<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        $response = Response::json($posts,200);
        return view('blog.index', compact('posts'));
    }
}
