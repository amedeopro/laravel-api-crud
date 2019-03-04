<?php

namespace App\Http\Middleware;

use Closure;

class ApiAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      //if (empty($request->header('Authorization'))) {
      if (!$request->hasHeader('Authorization')) {
        return response()->json([
          'error' => 'Manca l\'authorization'
        ]);
      }

      if ($request->header('Authorization') != 'pippo') {
        return response()->json([
          'error' => 'chiave errata'
        ]);
      }
        return $next($request);
    }
}
