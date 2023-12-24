<?php

namespace App\Http\Controllers;

use App\Models\emailVerification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class verifyController extends Controller
{
    public function index(){
        return view('user.index');
    }
    public function show(Request $request,string $id)
    {
        $verifywithtoken = emailVerification::find($id);
        if ($verifywithtoken->token == $request->get('token')) {
            User::where('id', $verifywithtoken->user_id)->update(['status' => true]);
            $verifywithtoken->is_verified_at = true;
            $verifywithtoken->save();
            return view('user.index');
        }


    }
}
