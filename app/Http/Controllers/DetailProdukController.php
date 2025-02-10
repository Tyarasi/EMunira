<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailProdukController extends Controller
{
    //
    public function detailProduk1() {
        return view('shop.munira-scarf-mscarf-latifa-biru.index');
    }
    public function detailProduk7() {
        return view('shop.ukhti-gamis-azkia-mustard.index');
    }
}
