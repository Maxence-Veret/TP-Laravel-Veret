<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController
{
    public function products()
    {
        return view('Products.products', [
            'movies' => Product::latest('release_at')->paginate(7),
        ]);
    }

    public function product()
    {
        return view('Products.product');
    }

    public function category()
    {
        return view('Products.category');
    }

    public function panier()
    {
        return view('Products.panier');
    }

    public function exemple()
    {
        return view('exem');
    }
}
