<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;

class EditController extends Controller
{
    public function index(Post $post)
    {
        return view('admin.post.edit', compact('post'));
    }
}
