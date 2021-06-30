<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google2FA;
use Auth;

class LoginController extends Controller
{
    public function loginUser(Request $request)
    {
        $this->validateRequest();

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            $user = Auth::user();

            //Generate Secret Key for the user
            $secret_key = Google2FA::generateSecretKey();
            $user->secret_key = $secret_key;
            $user->save();

            $secret = $user->secret_key;

            //Generate QRCode
            $qrImage = Google2FA::getQRCodeInline(
                config('app.name'),
                $user->email,
                $secret
            );

            $request->session()->put(['qrImage' => $qrImage, 'secret' => $secret]);
       
            $getqrImage = $request->session()->get('qrImage');
            $secret = $request->session()->get('secret');
            

           return redirect()->route('securityCode')->with([
            'qrImage'=> $getqrImage,
            'secret' => $secret
            ]);
     
        }

        else{

            return back()->with('error', 'Invalid Details');
        }

    }


    public function validateRequest()
    {
        $checkRequest = request()->validate([
            'email' => 'required',
            'password' => 'required|min:6'
        ]);

        return $checkRequest;
    }
}
