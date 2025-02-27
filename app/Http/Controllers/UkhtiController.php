<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UkhtiController extends Controller
{

    public function ukhti() {
        return view('shop.product-category.ukhti.index');
    }

}