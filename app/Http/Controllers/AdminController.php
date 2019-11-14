<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

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
        return view('admin.modify', compact('event', $event));
        
    }

    public function eventUpdate(Request $request, $eventId)
    {
        Event::where('id', $eventId)->update($request->all());
        return redirect()->route('admin.events')->with('info', 'Event has been updated');
    }

    public function eventDelete($eventId)
    {
        //if user can
        Event::where('id', $eventId)->delete();
        return redirect()->back();
    }


}
