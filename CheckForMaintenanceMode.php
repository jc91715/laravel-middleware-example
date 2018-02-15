<?php 

class CheckForMaintenanceMode implements Middleware
{
    public static function handle($request, Closure $next)
    {
        echo $request . ': Check if the application is in the maintenance status.' . PHP_EOL;
        $next($request);
    }
}
