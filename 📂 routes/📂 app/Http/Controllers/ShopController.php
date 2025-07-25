<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function show($slug)
    {
        return view('product', ['slug' => $slug]);
    }
}
