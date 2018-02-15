<?php

interface Middleware
{
    public static function handle($request, Closure $closure);
}