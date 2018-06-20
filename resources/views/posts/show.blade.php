@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-secondary" style="margin-bottom:2%">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Tweeted on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    {{-- If not a guest --}}
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit tweet</a>
            {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-right']) !!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
    @endif
@endsection