<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
{
    // Validasi input
    $rules = [
        'email' => 'required|email|max:255',
        'password' => 'required'
    ];
    $customMessages = [
        'email.required' => 'Email harus diisi!!!',
        'email.email' => 'Email tidak sesuai format!!!',
        'password.required' => 'Password harus diisi!!!',
    ];
    $this->validate($request, $rules, $customMessages);

    // Mengambil kredensial input
    $credentials = $request->only('email', 'password');
    $guards = ['user', 'admin'];

    foreach ($guards as $guard) {
        if (Auth::guard($guard)->attempt($credentials)) {
            Session::flash('success_message', 'Berhasil Login');

            switch ($guard) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'user':
                    return redirect()->route('mahasiswa.dashboard');
                default:
                    Session::flash('error_message', 'Anda tidak memiliki akses.');
                    return redirect()->back();
            }
        }
    }

    return redirect()->back()->with("error_message", "Email atau Password tidak sesuai. Silahkan masukan data dengan benar!!!!!");
}

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}