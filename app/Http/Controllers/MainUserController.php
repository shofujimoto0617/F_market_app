<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MainUserController extends Controller
{
    public function Logout() {
        Auth::logout();
        return Redirect()->route('login');
    }
}
