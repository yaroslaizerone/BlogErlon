<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }
}
