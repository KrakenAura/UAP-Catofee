<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatsController extends Controller
{
    public function cats_index()
    {
        return view('cats');
    }
}
