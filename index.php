<?php

$autoload_func = function($class) {
    include './'.$class.'.php';
};

spl_autoload_register($autoload_func);

function dispatchToRouter()
{
    return function ($request) {
        echo $request . ': Send Request to the Kernel, and Return Response.' . PHP_EOL;
    };
}

$request = 3;

// $requestObject = json_decode('{"a":"hello world"}');



$middlewares = [
    CheckForMaintenanceMode::class,
    AddQueuedCookiesToResponse::class,
    StartSession::class,
    ShareErrorsFromSession::class,
    VerifyCsrfToken::class,
];

(new Pipeline())->send($request)->through($middlewares)->then(dispatchToRouter());