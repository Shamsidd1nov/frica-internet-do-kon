<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PageController extends Controller
{
    public function getPost(){
        $post = Post::get();

        return view('welcome', ['posts' => $post]);
    }
}
