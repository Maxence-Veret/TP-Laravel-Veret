<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController
{
    public function products()
    {
        return view('Products.products');
    }

    public function product()
    {
        return view('Products.product');
    }

    public function category()
    {
        return view('Products.category');
    }
}
