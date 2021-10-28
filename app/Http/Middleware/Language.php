<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('app_locale') && in_array(session()->get('app_locale'), ['ru','kz','en'])) {
            App::setLocale(session()->get('app_locale'));
        }
        else {
            App::setLocale(config('app.fallback_locale'));
        }
        return $next($request);
    }
}
