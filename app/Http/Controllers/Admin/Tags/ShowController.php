<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class ShowController extends Controller
{
    public function index(Tag $tag)
    {
        return view('admin.tags.show', compact('tag'));
    }
}
