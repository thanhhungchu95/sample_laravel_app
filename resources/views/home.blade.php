@extends('master')

@section('title', 'Home Page')

@section('content')
    <div class="container">
        <div class="row banner">
            <div class="col-md-12">
                <h1 class="text-center margin-top-100 editContent">Learning Laravel 5</h1>
                <h3 class="text-center margin-top-100 editContent">Building Practical Applications</h3>
                <div class="text-center">
                    <img src="{!! asset('images/LearningLaravel5_cover0.png') !!}" alt="" width="302" height="391">
                </div>
            </div>
        </div>
    </div>
@endsection
