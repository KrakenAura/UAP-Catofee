<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function loginPage()
    {
        return view('login');
    }
    public function RegisterPage()
    {
        return view('register');
    }
    public function OrderHistoryPage()
    {
        return view('order_history');
    }
}
