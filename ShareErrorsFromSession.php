<?php 

class ShareErrorsFromSession implements Middleware
{
    public static function handle($request, Closure $next)
    {
    	echo $request . ': Share the errors variable from response to the views.' . PHP_EOL;
        $next($request);
        // echo $request . ': Share the errors variable from response to the views.' . PHP_EOL;
    }
}