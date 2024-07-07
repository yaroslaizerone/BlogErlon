<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Categories\StoreRequest;
use App\Models\Category;

class StoreController extends Controller
{
    public function index(StoreRequest $request)
    {
        $data = $request->validated();
        try {
            Category::firstOrCreate($data);
        } catch (\Exception $ex) {
            dd($ex);
        }


        return redirect()->route('admin.categories.index');
    }
}
