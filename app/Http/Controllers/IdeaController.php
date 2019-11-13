<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idea;

class IdeaController extends Controller
{
    public function index()
    {
        $numPerPage = request('perPage', 5);
        $ideas = Idea::withCount(['votes as upVotes_count' => function ($q) {
            $q->where('up', true);
        }])->orderBy('upVotes_count', 'desc')->paginate($numPerPage);


        return view('idea.index', ['ideas' => $ideas]);
    }
}