<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:20',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return response()->json(['success' => true, 'message' => 'Login successful.'], 200);
        }

        return response()->json(['success' => false, 'message' => 'Invalid credentials.'], 401);
    }
}
