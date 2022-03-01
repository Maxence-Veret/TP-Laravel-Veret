<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class ProductController
{
    public function products()
    {
        return view('Products.products', [
            'products' => Product::latest('release_at')->simplePaginate(8),
        ]);
    }

    public function prod()
    {
        return view('index', [
            'products' => Product::latest('release_at')->simplePaginate(3),
        ]);
    }

    public function prodhead()
    {
        return view('index', [
            'products' => Product::latest('release_at')->simplePaginate(1),
        ]);
    }

    //         /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function show(Product $product)
    {
        return view('Products.product', [
            'product' => $product,
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
