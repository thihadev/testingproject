<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
    	$users = User::all()->count();
    	return view('admin.dashboard', compact('users'));
    }

    // public function versionone()
    // {
    //     return view('admin.dashboard.v1');
    // }
    // public function versiontwo()
    // {
    //     return view('admin.dashboard.v2');
    // }
    // public function versionthree()
    // {
    //     return view('admin.dashboard.v3');
    // }
}
