<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\StoreRequest;
use App\Jobs\StoreUserJob;
use App\Mail\User\PasswordMail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function index(StoreRequest $request)
    {
        $data = $request->validated();
        try {
            StoreUserJob::dispatch($data);
        } catch (\Exception $ex) {
            dd($ex);
        }


        return redirect()->route('admin.user.index');
    }
}
