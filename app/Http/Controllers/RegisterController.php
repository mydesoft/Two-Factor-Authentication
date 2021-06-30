<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registerUser(Request $request)
    {
        $validated = $this->validateRequest();

        $validated['password'] = Hash::make($request->password);

        User::create($validated);

        return redirect()->route('login')->with('success', 'Registration Successful!');
    }

    public function validateRequest()
    {
        $checkRequest = request()->validate([
            'name' => 'required',
            'email' => 'email|required',
            'password' => 'required|confirmed|min:6'
        ]);

        return $checkRequest;
    }
}
