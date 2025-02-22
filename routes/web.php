<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\ChatbotController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// All Detail Produk View
Route::get('shop/munira-scarf-mscarf-latifa-biru/', [DetailProdukController::class, 'detailProduk1'])->name('detail_produk1');
Route::get('shop/ukhti-gamis-azkia-mustard', [DetailProdukController::class, 'detailProduk7'])->name('detail_produk7');
Route::post('/chatbot/respond', [ChatbotController::class, 'respond']);