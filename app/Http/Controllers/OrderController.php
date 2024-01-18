<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
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
        // Validate the request data
        $validatedData = $request->validate([
            'menu_id' => 'required|exists:menu,id',
            'qty' => 'required|integer|min:1',
            'room' => 'required|string|max:255',
            'date' => 'required|date',
            'customer_name' => 'required|string|max:255',
        ]);

        // Calculate total price based on menu price and quantity
        $menu = Menu::findOrFail($validatedData['menu_id']);;
        $totalPrice = $menu->price * $validatedData['qty'];

        // Create a new order associated with the logged-in user
        $order = \App\Models\User::find(Auth::id())->orders()->create([
            'menu_id' => $validatedData['menu_id'],
            'qty' => $validatedData['qty'],
            'total_price' => $totalPrice,
            'room' => $validatedData['room'],
            'date' => $validatedData['date'],
            'customer_name' => $validatedData['customer_name'],
        ]);

        // Redirect to the order details page
        return redirect()->route('orders.show', ['id' => $order->id]);
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
