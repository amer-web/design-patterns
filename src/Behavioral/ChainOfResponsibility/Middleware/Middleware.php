<?php


namespace App\Behavioral\ChainOfResponsibility\Middleware;


class Middleware
{
    protected $middleware = [];

    public function add($middleware)
    {
        $this->middleware[] = $middleware;
    }

    public function handle($request, \Closure $default)
    {
        $next = $default;

        foreach ($this->middleware as $middleware) {
            $next = function ($request) use ($middleware, $next) {
                return $middleware->handle($request, $next);
            };
        }

        return $next($request);
    }
}