@extends('layouts.app')

@section('content')
    <h1>Tweets</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Tweeted on {{$post->created_at}} by {{$post->user->name}}</small>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection