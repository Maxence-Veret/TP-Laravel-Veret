<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function cate()
    {
        return view('Categorie.categorie');
    }

    public function catelist()
    {
        return view('Categorie.categorie', [
            'categories' => Categorie::latest('release_at')->simplePaginate(5),
        ]);
    }
}
