@extends('master')

@section('title', 'View a ticket')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well bs-component">
            <div class="content">
                <h2 class="header">{!! $ticket->title !!}</h2>
                <p>
                    <strong>Status</strong>: {!! $ticket->status ? 'Pending' : 'Answered' !!}
                </p>
            </div>
            <a href="#" class="btn btn-info">Edit</a>
            <a href="#" class="btn btn-info">Delete</a>
        </div>
    </div>
@endsection
