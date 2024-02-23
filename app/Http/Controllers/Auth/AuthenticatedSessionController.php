<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): JsonResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        //        return redirect()->intended(RouteServiceProvider::HOME);
        $user = $request->user();

        return response()->json([
            'status'          => 'Success',
            'isAuthenticated' => true,
            'message'         => 'User Logged In Successfully',
            'user'            => $request->user(),
            'api_token'       => $user->createToken("api_token")->plainTextToken,
            'token_type'      => 'Bearer',
            'tenant'          => tenant(),
        ]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
