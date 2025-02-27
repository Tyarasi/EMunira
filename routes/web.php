<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailProdukController;
use App\Http\Controllers\MuniraController;
use App\Http\Controllers\UkhtiController;
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
Route::get('shop/munira-scarf-mscarf-laila-olive', [DetailProdukController::class, 'detailProduk5'])->name('detail_produk5');
Route::get('shop/munira-scarf-mscarf-laila-mocca', [DetailProdukController::class, 'detailProduk6'])->name('detail_produk6');
Route::get('shop/ukhti-gamis-azkia-mocca', [DetailProdukController::class, 'detailProduk8'])->name('detail_produk8');
Route::get('shop/ukhti-gamis-azkia-cappucino', [DetailProdukController::class, 'detailProduk9'])->name('detail_produk9');
Route::get('shop/ukhti-gamis-azkia-army', [DetailProdukController::class, 'detailProduk10'])->name('detail_produk10');
Route::get('shop/ukhti-gamis-elnara-putih', [DetailProdukController::class, 'detailProduk11'])->name('detail_produk11');
Route::get('shop/ukhti-gamis-elnara-magenta', [DetailProdukController::class, 'detailProduk12'])->name('detail_produk12');

//Munira View
Route::get('shop/product-category/munira', [MuniraController::class, 'munira'])->name('munira');
//Ukhti View
Route::get('shop/product-category/ukhti', [UkhtiController::class, 'ukhti'])->name('ukhti');




// Controller Chatbot
Route::post('/chatbot/respond', [ChatbotController::class, 'respond']);