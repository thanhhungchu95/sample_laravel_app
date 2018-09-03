<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function create()
    {
        return view('tickets.create');
    }
}
