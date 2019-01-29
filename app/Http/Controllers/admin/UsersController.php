<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Model\Address;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use function PhpParser\filesInDir;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::get();

        return view('admin.user.list', compact('users'));
    }

    public function create()
    {
        $userRoles = User::getUserRoles();

        return view('admin.user.create', compact('userRoles'));
    }

    public function store(UserCreateRequest $request)
    {
        $user = User::create([
            'name'     => $request->input('userFullName'),
            'email'    => $request->input('userEmail'),
            'password' => $request->input('userPassword'),
            'role'     => $request->input('userRole'),
        ]);

        if ($user) {
            return redirect()->route('admin.users')
                ->with('status', 'کاربر با موفقیت ساخته شد');
        }

    }

    public function delete(Request $request, $user_id)
    {
        $user = User::find($user_id);
        if ($user && $user instanceof User) {
            $userdestory = User::destroy($user_id);
            if ($userdestory) {
                return redirect()->back()
                    ->with('status', 'کاربر با موفقیت حذف شد');
            }
        }
    }

    public function edit(Request $request, $user_id)
    {
        $usersRoles = User::getUserRoles();
        $user = User::find($user_id);
        return view('admin.user.edit', compact('user', 'usersRoles'));
    }

    public function update(UserEditRequest $request, $user_id)
    {
        $user = User::find($user_id);
        if ($user && $user instanceof User) {
            $userData = [
                'name'  => $request->input('userFullName'),
                'email' => $request->input('userEmail'),
            ];
            if ($request->filled('userPassWord')) {
                $userData = ['password' => $request->input('userPassword')];
            }
            $updateResult = $user->update($userData);
            if ($updateResult) {
                return redirect()->route('admin.users')
                    ->with('status', 'کاربر با موفقیت ویرایش شد!');
            }
        }
    }

}
