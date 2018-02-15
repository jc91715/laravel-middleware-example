<?php 

class VerifyCsrfToken implements Middleware
{
    public static function handle($request, Closure $next)
    {
        echo $request . ': Verify csrf token when post request.' . PHP_EOL;
        $next($request);
    }
}