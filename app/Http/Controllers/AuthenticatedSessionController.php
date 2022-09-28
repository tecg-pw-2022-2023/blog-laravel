<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        if (auth()->attempt(request()->only('email', 'password'))) {
            request()->session()->regenerate();
            return redirect('/posts');
        }

        return back();
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/posts');
    }
}
