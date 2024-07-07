<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;

class IndexController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tags.index', compact('tags'));
    }
}
