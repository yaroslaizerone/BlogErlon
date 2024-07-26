<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Models\Post;

class ShowController extends BaseController
{
    public function index(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }
}
