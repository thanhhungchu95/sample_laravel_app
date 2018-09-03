@extends('master')

@section('title', 'Edit a ticket')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well bs-component">
            {!! Form::model($ticket, ['method' => 'patch', 'url' => '/tickets/' . $ticket->slug, 'class' => 'form-horizontal']) !!}
                @include('shared.errors')

                <fieldset>
                    <legend>Edit a ticket</legend>
                    <div class="form-group">
                        {!! Form::label('title', 'Title', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('title', $ticket->title, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('content', 'Content', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::textarea('content', $ticket->content, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-offset-2 control-label">
                            {!! Form::checkbox('status', null, $ticket->status ? false : true) !!}
                            {!! "Close this ticket?" !!}
                        </label>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            {!! Form::button('Cancel', ['class' => 'btn btn-default']) !!}
                            {!! Form::button('Update', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
                        </div>
                    </div>
                </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
