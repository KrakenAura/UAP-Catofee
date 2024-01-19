<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderView;

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
    public function orders(Request $request)
    {
        $query = $request->input('query');

        // If a search query is provided, filter orders accordingly
        if ($query) {
            $orders = OrderView::where('customer_name', 'like', '%' . $query . '%')
                ->orWhere('menu_name', 'like', '%' . $query . '%')
                ->get();
        } else {
            // If no search query, retrieve all orders
            $orders = OrderView::all();
        }

        return view('dashboard_order', ['orders' => $orders]);
    }
}
