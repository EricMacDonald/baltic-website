<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'exists:users'],
            'password' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        if (\Auth::attempt(array('email' => $validated['email'], 'password' => $validated['password']))) {
            return redirect()->route('elements/avatar');
        } else {
            $validator->errors()->add(
                'password', 'The password does not match with username'
            );
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
