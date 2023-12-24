<?php

namespace App\Http\Controllers;

use App\Mail\verification;
use App\Mail\VerifyEmailMail;
use App\Models\emailVerification;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function registerForm()
    {
        return view('register');
    }

    public function registerUser(Request $request){
        $data  = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ];

        $user = User::create($data);

//$verified = emailVerification::create(['token' => $token,
//'expired_at'=>Carbon::now()->addHour()]);
//        $token  = Str::random(32);

//        $user->verificationToken()->create([
//            'token' => $token,
//        ]);

//        Mail::to($user->email)->send(new Verification($user, $token));
//       return redirect()->back()->with('message', 'Successfully Registered');
        return redirect()->route('login.form');
    }

}
