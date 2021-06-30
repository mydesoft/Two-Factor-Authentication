<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Google2FA;

class TwoPhaseVerificationController extends Controller
{
    public function verifySecurityKey(Request $request)
    {
        $this->validateRequest();

        $userSecretKey = Auth::user()->secret_key;

        $securityKey = $request->security_key;

        $valid = Google2FA::verifyKey($userSecretKey, $securityKey);

        if($valid){

            return view('dashboard');
        }
        else{

            return redirect()->route('securityCode')->with('error', 'Inavlid Security Key');
        }

    }


    public function validateRequest(){

         $checkRequest = request()->validate([

            'security_key' => 'required|digits:6',
        ]);

        return $checkRequest;
    }


    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
