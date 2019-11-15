<?php

namespace App\Http\Controllers;

use App\Event;
use App\Product;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function showEvents()
    {
        $perPages = 10;
        $events = Event::latest()->paginate($perPages);
        
        return view('admin.events', compact('events', $events));
    }

    public function showProducts()
    {
        $perPages = 10;
        $products = Product::latest()->paginate($perPages);

        return view('admin.products', compact('products', $products));
    }

    public function eventModify($eventId)
    {
        $event = Event::find($eventId);
        return view('admin.eventModify', compact('event', $event));
        
    }

    public function eventUpdate(Request $request, $eventId)
    {
        $title = request('title');
        $description = request('description');
        $recurrent = request('recurrent');
        $price = request('price');
        $created_at = request('created_at');
        Event::where('id', $eventId)
            ->update([
                'title' => $title,
                'description' => $description,
                'recurrent' => $recurrent,
                'price' => $price,
                'created_at' => $created_at
            ]);
        return redirect()->route('admin.events')->with('info', 'Event has been updated');
    }

    public function eventDelete($eventId)
    {
        //if user can
        Event::where('id', $eventId)->delete();
        return redirect()->back();
    }


    /*_________________________________________________________*/

    public function productModify($productId)
    {
        $product = Product::find($productId);
        return view('admin.productModify', compact('product', $product));
    }

    public function productUpdate($productId)
    {
        $title = request('title');
        $description = request('description');
        $price = request('price');
        $stock = request('stock');
        $created_at = request('created_at');
        Product::where('id', $productId)
            ->update([
                'title' => $title,
                'description' => $description,
                'price' => $price,
                'stock' => $stock,
                'created_at' => $created_at
            ]);
        return redirect()->route('admin.products')->with('info', 'Product has been updated');
    }

    public function productDelete($productId)
    {
        Product::where('id', $productId)->delete();
        return redirect()->back();
    }

    
    public function productCreate()
    {
        return view('admin.productCreate');
    }

    public function productSave(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->image = 'iamanimage';
        $product->price = $request->price;
        $product->stock = $request->stock;

        $product->save();

        return redirect()->route('admin.events');
    }


}
