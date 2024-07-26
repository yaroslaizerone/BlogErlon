<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Models\Category;
use App\Models\Tag;

class CreateController extends BaseController
{
    public function index()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }
}
