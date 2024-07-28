<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Categories\UpdateRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function index(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
