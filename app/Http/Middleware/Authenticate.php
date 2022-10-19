<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            $previousRequest = request()->create(url()->previous());
            if (app('router')->getRoutes()->match($previousRequest)->getName() === 'single-post') {
                session()->flash('previous-url', url()->previous().'#create-comment-form');
            }

            return route('login');
        }
    }
}
