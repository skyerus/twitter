@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Vitae, minima? Dolore commodi, vero nulla nam laudantium tenetur aliquam porro sed dignissimos!
        Porro et debitis iure sequi officia amet, mollitia facere.</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
@endsection
