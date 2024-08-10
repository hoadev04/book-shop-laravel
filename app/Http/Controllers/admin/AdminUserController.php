<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
    public function users() {
        $user = User::orderBy('name', 'ASC')->get();

        return view('admin.users', compact('user'));
    }
}
