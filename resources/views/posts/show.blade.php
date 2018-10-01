@extends('layouts.app')

@section('content')

    <h1>{{ $post->title }}</h1>
    <div class="">
        <p>{{ $post->body }}</p>
    </div>

    @include('posts.comments.comment')

@endsection
