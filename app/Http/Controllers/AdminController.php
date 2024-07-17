<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('AdminPanel.auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('admin.index');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }
    public function show()
    {
        $restaurants = Restaurant::paginate(10);
        return view('AdminPanel.index', compact('restaurants'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
