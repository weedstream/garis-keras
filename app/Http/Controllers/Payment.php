<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backend\Product;

class Payment extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('home.payment', compact('data'));
    }
}
