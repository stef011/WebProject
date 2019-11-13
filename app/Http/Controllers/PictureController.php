<?php

namespace App\Http\Controllers;

use App\Event;
use App\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    public function album($event_id)
    {
        $pictures = Event::find($event_id)->pictures;


        return view('album.show', ['pictures' => $pictures]);
    }
    public function show($picture_id)
    {
        $picture = Picture::find($picture_id);
        $comments = $picture->comments;

        return view('picture.show', ['picture' => $picture, 'comments' => $comments]);
    }
}