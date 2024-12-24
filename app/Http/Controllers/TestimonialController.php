<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('frontend.fe_loop', compact('testimonials'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'testimonial' => 'required|string|max:1000',
            // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->content = $request->testimonial;

        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('testimonials', 'public');
        //     $testimonial->image = $imagePath;
        // }

        $testimonial->save();

        return redirect()->route('home')->with('success', 'Testimonial berhasil ditambahkan');
    }
}
