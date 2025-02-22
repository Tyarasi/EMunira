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
Route::get('shop/munira-scarf-mscarf-latifa-hijau-mint', [DetailProdukController::class, 'detailProduk2'])->name('detail_produk2');
Route::get('shop/munira-scarf-mscarf-latifa-olive', [DetailProdukController::class, 'detailProduk3'])->name('detail_produk3');
Route::get('shop/munira-scarf-mscarf-laila-red-brown', [DetailProdukController::class, 'detailProduk4'])->name('detail_produk4');

// Controller Chatbot
Route::post('/chatbot/respond', [ChatbotController::class, 'respond']);