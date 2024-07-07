<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use App\Models\Tag;


class DeleteController extends Controller
{
    public function index(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tags.index');
    }
}
