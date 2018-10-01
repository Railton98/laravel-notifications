@extends('layouts.app')

@section('content')

    <h1>Listagem dos Posts</h1>
    @forelse ($posts as $post)
        {{ $post->title }}
        <hr>
    @empty
        <p>Nenhum Post Encontrado!</p>
    @endforelse

    {!! $posts->links() !!}

@endsection
