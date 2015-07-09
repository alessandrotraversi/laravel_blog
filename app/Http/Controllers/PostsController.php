<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
Use App\Post;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index(){
        $post = \App\Post::all();
        return view('posts.index', compact('posts'));
    }
}
