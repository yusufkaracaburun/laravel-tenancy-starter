<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Laravel\Sanctum\PersonalAccessToken;

class TokenController extends Controller
{
    public function __construct(
    ) {
    }

    /**
     * This controller provides a token for mobile devices
     * It can also be used to access the API via a GUI
     * Insomnia or Postman are two examples of GUI's
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'api_token' => 'required',
        ]);

        $token = PersonalAccessToken::findToken($request->api_token);

        if ( ! $token) {
            throw ValidationException::withMessages(['token' => ['Invalid token']]);
        }

        $user = User::find($token->tokenable_id);

        return response()->json([
            'status'          => 'Success',
            'isAuthenticated' => true,
            'user'            => $user,
            'api_token'       => $request->api_token,
            'token_type'      => 'Bearer',
            'tenant'          => tenant(),
            'settings'        => [],
            'roles'           => [],
            'permissions'     => [],
            'total_reminders' => count([])
        ], 200);
    }
}
