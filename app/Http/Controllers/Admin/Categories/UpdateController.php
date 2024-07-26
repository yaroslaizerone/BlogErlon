<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Categories\UpdateRequest;
use App\Models\Category;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        return view('admin.categories.show', compact('category'));
    }
}
