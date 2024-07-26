<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
    public function index(StoreRequest $request)
    {
        $data = $request->validated();
        try {
            $data['password'] = Hash::make($data['password']);
            User::firstOrCreate(['email' => $data['email']],$data);
        } catch (\Exception $ex) {
            dd($ex);
        }


        return redirect()->route('admin.user.index');
    }
}
