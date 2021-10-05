<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("auth.login");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("customAuth.register");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:6',
        ]);

        $request->password = Hash::make($request->password);

        $user = new User;
        $user->fill($request->all());
        $user->save();

        return redirect("login");
    }

    public function login(Request $request) {
        $validation = $request->validate([
            'email'     => 'required|email',
            'password'  => 'required',
        ]);

        $remember = ($request->input("remember") !== null);

        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials, $remember)) {
            return back()->with("error", __("auth.failed"));
        }

        return redirect()->intended();
    }
}
