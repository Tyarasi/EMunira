<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuniraController extends Controller
{

    public function munira() {
        return view('shop.product-category.munira.index');
    }

}