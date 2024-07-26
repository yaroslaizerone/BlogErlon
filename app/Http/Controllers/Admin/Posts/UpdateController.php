<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Requests\Admin\Posts\UpdateRequest;
use App\Models\Post;

class UpdateController extends BaseController
{
    public function index(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $post = $this->service->update($data, $post);

        return view('admin.posts.show', compact('post'));
    }
}
