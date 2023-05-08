<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class AuthenticateApi extends Middleware
{
    protected function authenticate($request, array $guards) {
        $token = $request->query('api_token');

        if(empty($token)){
            $token = $request->input('api_token');
        }
        if(empty($token)){
            $token = $request->bearerToken();
        }

        if($token == config('apitokens')[0])
            return;
        else
            $this->unauthenticated($request, $guards);
    }
}
