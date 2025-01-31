<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category;

class DeleteController extends Controller
{
    public function index(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.tags.index');
    }
}
