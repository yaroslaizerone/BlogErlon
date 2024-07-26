<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\UpdateRequest;
use App\Models\User;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);
        return view('admin.user.show', compact('user'));
    }
}
