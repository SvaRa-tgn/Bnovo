<?php

namespace App\Http\Middleware;

use Carbon\Carbon;

class AddTimeHeader
{
    public function handle($request, \Closure $next)
    {
        $time1 = Carbon::now();
        $response = $next($request);
        $time2 = Carbon::now();
        $response->header('X-Debug-Time', $time2->diffInMilliseconds($time1));

        return $response;
    }
}
