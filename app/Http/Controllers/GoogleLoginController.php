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
<<<<<<< HEAD
        try {
            $user = Socialite::driver('google')->user();
=======
            $user = Socialite::driver('google')->stateless()->user();
>>>>>>> 91941c7 (feat: convert to laravel 10)
    
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
    
<<<<<<< HEAD
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
=======
                $login = Auth::login($user);
                return redirect('/home');
            } else {
                dd($registeredUser);
                $login = Auth::login($registeredUser, true);
                // dd(Auth::check());
                return redirect()->intended('/home');
            }
>>>>>>> 91941c7 (feat: convert to laravel 10)
    }
}
