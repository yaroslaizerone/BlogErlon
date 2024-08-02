<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use App\Models\PostUserLike;

class DeleteController extends Controller
{
    public function index(Post $post)
    {
        auth()->user()->likedPost()->detach($post->id);
        return view('personal.liked.index');
    }
}
