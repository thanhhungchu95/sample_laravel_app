@extends('master')

@section('title', 'Home Page')

@section('content')
    <div class="container">
        <div class="content">
            <div class="title">Home page</div>
            <div class="quote">Our Home page!</div>
        </div>
        @if ($product == 1)
            {!! $product !!}
        @else
            {!! 'There is no product!' !!}
        @endif
    </div>
@endsection
