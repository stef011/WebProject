<?php

namespace App\Http\Controllers;

use App\BasketLine;
use Illuminate\Http\Request;

class BasketLineController extends Controller
{
    public function show($basketLine_id)
    {
        $basketLine = BasketLine::find($basketLine_id);

        view('basket.show', ['basketLine' => $basketLine]);
    }
}
