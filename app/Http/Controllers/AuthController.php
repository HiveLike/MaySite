<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInRequest;
use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function signup(SignUpRequest $request){

        $validated = $request->validated();

        if(Auth::attempt($validated)) {
            return back()->withErrors(['Invalid crudentials']);
        }

        $validated['password'] = Hash::make($validated['password']);

        $user = User::query()->create($validated);

        Auth::login($user);

        return redirect()->route('home');
    }

    public function signin(SignInRequest $request){

        $validated = $request->validated();

        if(!Auth::attempt($validated)) {
            return back()->withErrors(['Invalid crudentials']);
        }

        return redirect()->route('home');
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('home');
    }
}
