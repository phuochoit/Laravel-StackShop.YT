<?php

namespace App\Http\Controllers\Admin;

class AdminDashboardController extends AdminController
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function login()
    {
        return view('admin.login');
    }
}
