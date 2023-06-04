<?php


namespace App\Behavioral\ChainOfResponsibility\Middleware;


class VerifyCsrfTokenMiddleware
{
    public function handle($request, \Closure $next)
    {
        $tokensMatch = true;
        if ($tokensMatch) {
            return $next($request);
        }

        throw new \Exception('your token is not match');
    }

}