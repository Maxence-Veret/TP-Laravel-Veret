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
            'products' => Product::simplePaginate(8),

        ]);
    }

    public function prod()
    {
        return view('index', [
            'products' => Product::latest('release_at')->simplePaginate(3),

            'produits' => Product::simplePaginate(1),

            //'produs' => Product::filter('cdc')->simplePaginate(3),

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

    public function panier()
    {
        return view('Products.panier');
    }

    public function exemple()
    {
        return view('exem');
    }
}
