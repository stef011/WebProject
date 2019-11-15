<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{

    public function index()
    {
        $numPerPage = request('perPage', 6);
        $events = Event::latest()->paginate($numPerPage);

        return view('event.index', ['events' => $events]);
    }

    public function show($eventId)
    {
        $event = Event::find($eventId);

        if (!$event) {
            abort(404, 'Event not found');
        }

        return view('event.show', ['event' => $event]);
    }
}