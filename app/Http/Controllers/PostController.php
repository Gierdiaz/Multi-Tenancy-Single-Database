<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(): View
    {
        //$tenant = auth()->user()->tenant->id;
        $posts = Post::get();
        // dd($posts);

        return view('posts.index', compact('posts'));
    }

    
}
