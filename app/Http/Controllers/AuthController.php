<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
        return view('livewire.auth.register');
    }

    public function login() {
        return view('livewire.auth.login');
    }
}
