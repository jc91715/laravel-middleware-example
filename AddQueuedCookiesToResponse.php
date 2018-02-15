<?php 

class AddQueuedCookiesToResponse implements Middleware
{
    public static function handle($request, Closure $next)
    {
    	echo $request. ': Add queued cookies to the response.' . PHP_EOL;
        $next($request);
        // echo $request . ': Add queued cookies to the response.' . PHP_EOL;
    }
}
