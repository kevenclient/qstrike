<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request)
    {
        $credentials = $request->validated();
        $authenticated = Auth::attempt($credentials);

        if (!$authenticated) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

        return redirect()->route('factories.index');
    }
}
