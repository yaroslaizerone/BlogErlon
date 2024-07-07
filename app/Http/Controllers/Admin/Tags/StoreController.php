<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tags\StoreRequest;
use App\Models\Tag;

class StoreController extends Controller
{
    public function index(StoreRequest $request)
    {
        $data = $request->validated();
        try {
            Tag::firstOrCreate($data);
        } catch (\Exception $ex) {
            dd($ex);
        }


        return redirect()->route('admin.tags.index');
    }
}
