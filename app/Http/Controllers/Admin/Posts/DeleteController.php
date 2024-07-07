<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Models\Tag;


class DeleteController extends Controller
{
    public function index(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.posts.index');
    }
}
