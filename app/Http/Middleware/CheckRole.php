<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role = null, $permission = null)
    {
        if (Auth::check()) {
            $user = Auth::user(); 
            $roles = explode("|", $role);
            $permission = false;
            if($role != null) {
                foreach ($roles as $roleUser) {
                    if($user->roles->contains('name', $roleUser)) {
                        $permission = true;
                    }
                }
            }
            if($permission){
                return $next($request);
            }else{
                return redirect()->back();
            }  
        }
        return redirect('admin.formLoginAdmin');
    }
}
