<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function index()
    {
        return view('admin.categories.create');
    }
}
