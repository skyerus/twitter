@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-secondary" style="margin-bottom:2%">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Tweeted on {{$post->created_at}}</small>
@endsection