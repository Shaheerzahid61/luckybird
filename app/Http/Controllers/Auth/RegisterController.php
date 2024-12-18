<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller; // Make sure the base Controller is imported
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:20|regex:/[A-Z]/|regex:/[0-9]/',
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'country' => 'required',
            'birth_date' => 'required|date',
            'terms_accepted' => 'required|boolean',
        ]);

        $user = User::create([
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'country' => $validatedData['country'],
            'birth_date' => $validatedData['birth_date'],
            'terms_accepted' => $validatedData['terms_accepted'],
        ]);

        return response()->json(['success' => true, 'user' => $user], 201);
    }
}
