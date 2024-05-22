<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\InvalidStateException;

class GoogleLoginController extends Controller
{
    public function redirect() {
        return Socialite::driver('google')->redirect();
    }

    public function callback() {
        try {
            $user = Socialite::driver('google')->user();
    
            $registeredUser = User::where('google_id', $user->id)->first();
    
            if (!$registeredUser) {
                $user = User::create([
                    'google_id' => $user->id,
                    'username' => $user->username,
                    'email' => $user->email,
                    'password' => Hash::make('password'),
                    'google_token' => $user->token,
                    'google_refresh_token' => $user->refreshToken,
                ]);
    
                Auth::login($user);
                return redirect('/home');
            } else {
                Auth::login($registeredUser);
                return redirect()->intended('/home');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect('/login');
        }
    }
}
