<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderView;
use Carbon\Carbon;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch orders for the logged-in user
        // $orders = Auth::user()->orders()->get();
        $orders = \App\Models\User::find(Auth::id())->orders()->get();



        // Return a view with the orders data
        return view('order_history', ['orders' => $orders]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $currentDate = Carbon::now()->toDateString();
        $validatedData = $request->validate([
            'menu_id' => 'required|exists:menu,id',
            'room' => 'required|string|max:255',
            'total_price' => 'required|numeric|min:0',
            'username' => 'required|string|max:255',
        ]);

        $order = Order::create([
            'user_id' => auth()->id(),
            'menu_id' => $validatedData['menu_id'],
            'room' => $validatedData['room'],
            'total_price' => $validatedData['total_price'],
            'customer_name' => $validatedData['username'],
            'date' => $currentDate,
        ]);


        return redirect()->route('order.history');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the order by ID for the logged-in user
        $order = \App\Models\User::find(Auth::id())->orders()->findOrFail($id);

        // Return a view with the order details
        return view('orders.show', ['order' => $order]);
    }

    public function orderHistory()
    {
        // Find the order by ID for the logged-in user
        $orders =
            DB::table('order_view')->where('customer_name',  auth()->check() ? auth()->user()->username : '')->get();

        // Return a view with the order details
        return view('order_history', ['orders' => $orders]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'qty' => 'required|integer|min:1',
            'room' => 'required|string|max:255',
            'date' => 'required|date',
            'customer_name' => 'required|string|max:255',
        ]);

        // Find the order by ID for the logged-in user
        $order = \App\Models\User::find(Auth::id())->orders()->findOrFail($id);

        // Update the order data
        $order->update([
            'qty' => $validatedData['qty'],
            'room' => $validatedData['room'],
            'date' => $validatedData['date'],
            'customer_name' => $validatedData['customer_name'],
        ]);

        // Redirect to the order details page
        return redirect()->route('orders.show', ['id' => $order->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find and delete the order by ID for the logged-in user
        \App\Models\User::find(Auth::id())->orders()->findOrFail($id)->delete();

        // Redirect to the orders index page
        return redirect()->route('orders.index');
    }

    public function menu()
    {
        // Fetch all orders from the database

        // Return a view with the orders data
        return view('menu');
    }
}
