@extends('master')

@section('title', 'Contact')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well bs-component">
            {!! Form::open(['url' => 'contact', 'class' => 'form-horizontal', 'method' => 'post']) !!}
                <fieldset>
                    <legend>Submit a new ticket</legend>
                    @include('shared.status')
                    @include('shared.errors')
                    <div class="form-group">
                        {!! Form::label('title', 'Title', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('content', 'Content', ['class' => 'col-lg-2 control-label']) !!}
                        <div class="col-lg-10">
                            {!! Form::textarea('content', '', ['rows' => '3', 'class' => 'form-control']) !!}
                            <span class="help-block">Feel free to ask us any question</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            {!! Form::button('Cancel', ['class' => 'btn btn-default']) !!}
                            {!! Form::button('Submit', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
