<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Posts\UpdateRequest;
use App\Models\Post;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $post->update($data);
        return view('admin.posts.show', compact('post'));
    }
}
