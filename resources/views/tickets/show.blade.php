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
            <a href="{!! action('TicketsController@edit', $ticket->slug) !!}" class="pull-left btn btn-info">Edit</a>
            {!! Form::model($ticket, ['method' => 'delete', 'url' => '/tickets/' . $ticket->slug, 'class' => 'pull-left']) !!}
                <div>
                    {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-warning']) !!}
                </div>
            {!! Form::close() !!}

            <div class="clearfix"></div>
        </div>

        @foreach($comments as $comment)
            <div class="well bs-component">
                <div class="content">
                    {!! $comment->content !!}
                </div>
            </div>
        @endforeach

        <div class="well bs-component">
            {!! Form::open(['url' => '/comments', 'class' => 'form-horizontal', 'method' => 'post']) !!}
                @include('shared.errors')
                @include('shared.status')

                {!! Form::hidden('post_id', $ticket->id) !!}

                <fieldset>
                    <legend>Reply</legend>
                    <div class="form_group">
                        <div class="col-lg-12">
                            {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => 3]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            {!! Form::button('Cancel', ['type' => 'reset', 'class' => 'btn btn-default']) !!}
                            {!! Form::button('Post', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
