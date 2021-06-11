<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;

class Admin
{
    /**
     * The Guard implementation.
     * 
     *  @var Guard
     */
    protected $auth;
 
    /**
     *  Create a new filter instance.
     * 
     *  @param Guard $auth
     *  @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()->is_admin == 1){
            return $next($request);
        }
   
        return redirect('home')->with('error',"Only admin can access!");
    }
}