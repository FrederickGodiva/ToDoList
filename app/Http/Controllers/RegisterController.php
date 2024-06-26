<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request) {
        if($request->input('password') != $request->input('password-confirm')) {
            return redirect()->back();
        }

        $validatedData = $request->validate([
            'username' => 'required|max:255|unique:users',
            'password' => 'required|min:3|max:255'
        ]);

    $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login');
    }
}
