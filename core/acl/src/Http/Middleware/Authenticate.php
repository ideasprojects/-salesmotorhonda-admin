<?php

namespace Botble\ACL\Http\Middleware;

use Auth;
use Closure;
use DashboardMenu;
use Illuminate\Auth\Middleware\Authenticate as BaseAuthenticate;

class Authenticate extends BaseAuthenticate
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Closure $next
     * @param array $guards
     * @return mixed
     * @author Sang Nguyen
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $this->authenticate($request, $guards);

        if (!$guards) {
            $route = $request->route()->getAction();
            $flag = array_get($route, 'permission', array_get($route, 'as'));
            $user = Auth::user();
            if ($flag && !$user->hasPermission($flag)) {
                if ($request->expectsJson()) {
                    return response()->json(['message' => 'Unauthenticated.'], 401);
                }
                abort(401);
            }

            DashboardMenu::init($request->user());
        }
        return $next($request);
    }
}
