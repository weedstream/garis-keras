<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use App\Models\Backend\Product;

class CheckoutController extends Controller
{
    public function showForm()
    {
        $data = Product::all();
        return view('home.checkout', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'product' => 'required|string|max:255',
            'product_size' => 'required|string|max:10',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'postal_code' => 'required|string|max:10',
            'payment_method' => 'required|string|max:50',
            'e_wallet_provider' => 'nullable|string|max:50',
            'e_wallet_number' => 'nullable|string|max:50',
        ]);

        Checkout::create($request->all());

        return redirect()->back()->with('success', 'Checkout successful!');
    }

    public function show ($id)
    {
        $data = Product::find($id);
        return view('home.checkout', compact('data'));
    }
}
