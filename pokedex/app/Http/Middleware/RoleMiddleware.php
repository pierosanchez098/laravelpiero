<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $role = $request->input('role');

    $request->session()->put('role', $role);

    if ($role === 'admin') {
        return redirect('/pokemons/index');
    } else {
        return redirect('/pokemons/indexusuario');
    }
    return $next($request);
    }
}