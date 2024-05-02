<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function listPost()
    {
        $posts = Post::all();
        return view('crud_user.post',['posts' => $posts]);
    }
}
