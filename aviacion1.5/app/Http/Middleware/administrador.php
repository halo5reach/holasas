<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\contracts\Auth\guard;

class administrador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $auth;

    public function __construct(guard $auth)
    {
        $this->auth = $auth;
    }


    public function handle($request, Closure $next)
    {
        if($this->auth->user()->administrador()){
            return $next($request);
        }else{
            abort(401);
        }
    }
}
