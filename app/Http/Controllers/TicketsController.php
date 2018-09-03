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
            'slug' => $slug,
        ]);

        return redirect('/contact')->with('status', 'Your ticket has been created! It\'s unique id is: ' . $slug);
    }

    public function show($slug)
    {
        $ticket = Ticket::whereSlug($slug)->firstOrFail();

        return view('tickets.show', compact('ticket'));
    }

    public function edit($slug)
    {
        $ticket = Ticket::whereSlug($slug)->firstOrFail();

        return view('tickets.edit', compact('ticket'));
    }

    public function update($slug, TicketFormRequest $request)
    {
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $ticket->title = $request->get('title');
        $ticket->content = $request->get('content');
        if ($request->get('status') != null) {
            $ticket->status = 0;
        } else {
            $ticket->status = 1;
        }
        $ticket->save();

        return redirect(action('TicketsController@show', $ticket->slug))->with(
            'status',
            'The ticket ' . $slug . ' has been updated!'
        );
    }
}
