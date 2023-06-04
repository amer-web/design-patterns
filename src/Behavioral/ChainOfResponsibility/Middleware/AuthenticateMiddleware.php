<?php


namespace App\Behavioral\ChainOfResponsibility\Middleware;


class AuthenticateMiddleware
{
    public function handle($request, \Closure $next)
    {

        $check = true;
        if (!$check) {
            return 'login';
        }

        return $next($request);
    }
}