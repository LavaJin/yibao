<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AccountController extends Controller
{

    public function index(User $user)
    {
        $users = $user::paginate(15);
        return view('admin.index', compact('users'));
    }

    public function edit(Request $request, User $account)
    {
        if (strtolower($request->method()) == 'get') {
            $user = $account;
            return view('admin.account', compact('user'));
        
        } else {

            $name = $request->input('name');
            $email = $request->input('email');
            $password = $request->input('password');

            if ($name) {
                $this->validate($request, [
                    'name' => ['required', Rule::unique('users')->ignore($account->id)],
                ],[
                    'name.required' => '用户名不能为空', 
                    'name.unique' => '用户名已存在',
                ]);
                $account->update(['name' => $name]);
            }

            if ($email) {
                $this->validate($request, [
                    'email' => ['required', Rule::unique('users')->ignore($account->id)],
                ],[
                    'email.required' => '邮箱不能为空', 
                    'email.unique' => '邮箱已存在',
                ]);
                $account->update(['email' => $email]);
            }

            if ($password) {
                $this->validate($request, [
                    'password' => ['required', 'string', 'min:6', 'max:10'],
                ],[
                    'password.required' => '密码不能为空', 
                    'password.min' => '密码最小长度6位',
                    'password.max' => '密码最大10位',
                ]);
                $account->update(['password' => Hash::make($password)]);
            }

            return redirect()->route('account.index')->with('success', '修改成功');
        }
    }

    public function create(Request $request)
    {
        if (strtolower($request->method()) == 'get') {
            return view('admin.create');
        } else {
            $this->validate(
                $request,
                [ 
                    'name' => ['required', 'unique:users'],
                    'email' => ['required', 'unique:users'],
                    'password' => ['required', 'string', 'min:6', 'max:10'],
                ],
                [ 
                    'name.required' => '用户名不能为空', 
                    'name.unique' => '用户名已存在',
                    'email.required' => '邮箱不能为空', 
                    'email.unique' => '邮箱已存在',
                    'password.required' => '密码不能为空', 
                    'password.min' => '密码最小长度6位',
                    'password.max' => '密码最大10位',
                ]
            );
            $data = $request->only('name', 'email');
            $data = array_merge($data, [
                'password' => Hash::make($request->input('password'))
            ]);

            User::create($data);

            return redirect()->route('account.index')->with('success', '创建成功');
        }
    }

    public function delete(User $account)
    {
        $account->delete();

        return back()->with('success', '删除成功');
    }
}
