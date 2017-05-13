<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class CheckOCCompanyHeader
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
        if(!isset($_SERVER['HTTP_X_COMPANY_DATABASE'])){
            abort(409, 'You need to provide an OpenConcerto company header for this endpoint (Ex.: X_COMPANY_DATABASE = OpenConcerto42)');
        }

        $schema = $_SERVER['HTTP_X_COMPANY_DATABASE'];

        try {
            $query = DB::select('SELECT EXISTS(SELECT 1 FROM information_schema.schemata
              WHERE schema_name = \''. $schema .'\')')[0];

            if(!$query->exists){
                abort(409, 'Company header provided is not available: '. $schema);
            }
        } catch(\Illuminate\Database\QueryException $e) {
            return $this->response->errorInternal('An error occured while trying to connect to database.');
        }


        return $next($request);
    }
}
