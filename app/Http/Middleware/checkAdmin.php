<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if($request->session()->get('admin_id') == null){
            return redirect('/admin/login');
            //   }elseif($request->session()->get('user_id') != null){
            //   echo $request->session()->get('user_id');
            //return redirect('/');
        }

        return $next($request);

    }
}
