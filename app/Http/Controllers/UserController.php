<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allUser = User::all();
        return view('user.index', compact('allUser'));
    }


    // Store (Register or Login)
    public function store(Request $request)
    {
        if ($request->has('register')) {
            $res = $request->validate([
                'name' => 'required|unique:users,name',
                'password' => 'required',
            ]);

            $user = User::create([
                'name' => $request->name,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);
            return redirect()->route('pembelian.index')->with('success', 'Registrasi berhasil!');
        } else {
            $request->validate([
                'name' => 'required',
                'password' => 'required',
            ]);

            $user = User::where('name', $request->name)->first();

            if ($user && Hash::check($request->password, $user->password)) {
                Auth::login($user);
                return redirect()->route('pembelian.index')->with('success', 'Registrasi berhasil!');
            }

            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }

    public function show($id)
    {
        if (Auth::check() && Auth::id() == $id) {
            return response()->json(['user' => Auth::user()]);
        }

        return response()->json(['message' => 'No user is logged in or unauthorized access'], 401);
    }
}
