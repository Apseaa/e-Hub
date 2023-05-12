<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    public function login(Request $request)
{
    $encryptedPassword = encrypt($request->input('password'));

    $user = User::firstOrCreate([
        'email' => $request->input('email')
    ], [
        'password' => $encryptedPassword
    ]);

    if ($user && decrypt($user->password) == $request->input('password')) {
        Auth::login($user);
        return redirect()->route('posts.index');
    }

    return back()->withErrors(['email' => 'Invalid email or password. Please try again.']);
}

    public function logout(Request $request)
{
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('home');
}

}
