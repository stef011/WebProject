<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{

    public function index()
    {
        $numPerPage = request('perPage', 5);
        $events = Event::latest()->paginate($numPerPage);

        return view('event.index', ['events' => $events]);
    }

    public function show($eventId)
    {
        $event = Event::find($eventId);

        return view('event.show', ['event' => $event]);
    }
}
