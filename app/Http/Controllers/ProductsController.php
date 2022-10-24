<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products() {
        $products = [
            ["nama" => "Ayam Bakar", "harga" => 25000, "urlgambar" => "assets/images/ayambakar.jpg"],
            ["nama" => "Bubur Ayam", "harga" => 15000, "urlgambar" => "assets/images/buburayam.jpg"],
            ["nama" => "Ikan Bakar", "harga" => 40000, "urlgambar" => "assets/images/ikanbakar.jpg"],
            ["nama" => "Nasi Goreng", "harga" => 18500, "urlgambar" => "assets/images/nasgor.jpeg"],
            ["nama" => "Sate", "harga" => 35000, "urlgambar" => "assets/images/sate.jpeg"],
            ["nama" => "Soto Ayam", "harga" => 22000, "urlgambar" => "assets/images/sotoayam.jpg"]

        ];
        return view('products',
    compact('products'));
    }
}
