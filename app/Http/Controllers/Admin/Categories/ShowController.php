<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Categories\StoreRequest;
use App\Models\Category;

class ShowController extends Controller
{
    public function index(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }
}
