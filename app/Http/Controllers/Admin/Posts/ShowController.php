<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;

class ShowController extends Controller
{
    public function index(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }
}
