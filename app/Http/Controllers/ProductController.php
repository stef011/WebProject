<?php


namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;



class ProductController extends Controller
{
 
    public $product;


    public function index(Request $request)
    {
        $sortBy = 'price';
        $orderBy = 'desc';
        $perPage = 20;
        $q = null;
    
        if ($request->has('orderBy')) $orderBy = $request->query('orderBy');
        if ($request->has('sortBy')) $sortBy = $request->query('sortBy');
        if ($request->has('perPage')) $perPage = $request->query('perPage');
        if ($request->has('q')) $q = $request->query('q');
    
        $products = Product::search($q)->orderBy($sortBy, $orderBy)->paginate($perPage);
        return view('product.index', compact('products', 'orderBy', 'sortBy', 'q', 'perPage'));
    }



    public function show($productId)
    {
        $product = Product::find($productId);

        return view('product.show', ['product' => $product]);
    }

}
