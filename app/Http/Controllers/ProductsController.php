<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;


class ProductsController extends Controller
{
    public $products;

    public function index()
    {
        $products = Product::all();
        return view('shop', ['products' => $products]);
    }
}
