<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function cats()
    {
        return view('dashboard');
    }
    public function customer()
    {
        return view('dashboard_customer');
    }
    public function orders()
    {
        return view('dashboard');
    }
}
