<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function Home() {
        $items = Item::inRandomOrder()->take(9)->get();
        return view('user.home', compact('items'));
    }
}
