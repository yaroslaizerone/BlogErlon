<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Posts\StoreRequest;
use App\Models\Post;
use App\Models\Tag;

class StoreController extends Controller
{
    public function index(StoreRequest $request)
    {
        $data = $request->validated();
        try {
            Post::firstOrCreate($data);
        } catch (\Exception $ex) {
            dd($ex);
        }


        return redirect()->route('admin.posts.index');
    }
}
