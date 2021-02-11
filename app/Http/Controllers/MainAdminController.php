<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class MainAdminController extends Controller
{
    public function AdminProfile() {
        $adminDate = Admin::find(1);
        return view('admin.profile.view_profile', compact('adminDate'));
    }  
}
