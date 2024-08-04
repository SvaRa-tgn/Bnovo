<?php

namespace App\Http\Middleware;

use Carbon\Carbon;

class AddMemoryHeader
{
    public function handle($request, \Closure $next)
    {

        $memory1 = memory_get_usage();
        $response = $next($request);
        $memory2 = memory_get_usage();
        $memory = ($memory2 - $memory1) / 1024;
        $response->header('X-Debug-Memory', $memory);

        return $response;
    }
}
