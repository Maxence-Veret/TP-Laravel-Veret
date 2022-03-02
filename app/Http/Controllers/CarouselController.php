<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function carousel()
    {
        return view('index', [
            'produit' => Product::latest('release_at')->simplePaginate(1),
        ]);
    }
}
