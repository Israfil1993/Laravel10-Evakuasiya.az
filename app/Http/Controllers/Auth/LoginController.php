<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $login = $request->only('email', 'password');

        if (Auth::attempt($login))
        {
            $notification = array(
                'message' => 'Uğurla Daxil Oldunuz',
                'alert-type' => 'success'
            );

            return redirect()->route('admin.index')->with($notification);
        }
        else
        {
            return redirect()->back();
        }
    }

    public function editProfile()
    {
        $user = User::find(1);

        return view('auth.profile', compact('user'));
    }

    public function updateProfile(UpdateProfileRequest $request)
    {
        $previous_image = $request->previous_image;

        $user = User::findOrFail(1);
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('assets/backend/images/users/'), $imageName);
            $validated['image'] = $imageName;

            if (file_exists($previous_image))
            {
                unlink($previous_image);
            }
        }

        $user->update($validated);

        $notification = array(
            'message' => 'Məlumat  Yeniləndi',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function logout()
    {
            Session::flush();

            Auth::logout();

        $notification = array(
            'message' => 'Çıxış Etdiniz',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.showLogin')->with($notification);
    }
}
