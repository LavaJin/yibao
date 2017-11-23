<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = $request->user();

        if (strtolower($request->method()) == 'get') {
            
            return view('admin.account', compact('user'));
        
        } else {

            $name = $request->input('name');
            $password = $request->input('password');

            if ($name) {
                $user->update(['name' => $name]);
            }

            if ($password) {
                $user->update(['password' => Hash::make($password)]);
            }

            return back()->with('success', '修改成功');
        }
    }
}
