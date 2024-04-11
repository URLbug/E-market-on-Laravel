<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    /*
     * Get requests
     */
    public function index_login(): View
    {
        return view('content.user.login');
    }

    public function index_register(): View
    {
        return view('content.user.register');
    }

    /*
     * Post requests
     */
    public function register(): View
    {
        return view('content.user.index');
    }

    public function login(Request $request): RedirectResponse
    {
        $data = $request->validate(
            [
                'login' => 'required|string',
                'password' => 'required|string',
                'remember' => 'string',
            ]
        );

        $auth = Auth::attempt(
            [
                'username' => $data['login'],
                'password' => $data['password'],
            ],
            isset($data['remember'])
        );

        if($auth)
        {
            $request->session()->regenerate();

            return redirect()->intended('/user/account/' . $data['login']);
        }

        return back()->withErrors([
            'error' => 'Wrong a username or|and a password',
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
