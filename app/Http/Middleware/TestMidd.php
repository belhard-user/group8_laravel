<?php

namespace App\Http\Middleware;

use Closure;

class TestMidd
{
    private $user;

    public function __construct()
    {
        $this->user = auth()->user();
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->user->name == 'Юра'){
            abort(403);
        }

        return $next($request);
    }
}
