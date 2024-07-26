<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Requests\Admin\Posts\StoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function index(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('admin.posts.index');
    }
}
