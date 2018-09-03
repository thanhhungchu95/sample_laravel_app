<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TicketFormRequest;
use App\Ticket;

class TicketsController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(TicketFormRequest $request)
    {
        $slug = uniqid();
        Ticket::create([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'slug' => $slug
        ]);

        return redirect('/contact')->with('status', 'Your ticket has been created! It\'s unique id is: ' . $slug);
    }
}
