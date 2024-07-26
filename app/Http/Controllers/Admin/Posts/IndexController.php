<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Models\Post;

class IndexController extends BaseController
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }
}
