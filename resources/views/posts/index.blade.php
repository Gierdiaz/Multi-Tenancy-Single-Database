@extends('layouts.app')

@section('content')

    <h1>Posts</h1>

    @forelse ($posts as $post)
        <p>{{ $post->title }}</p>
        <p>{{ $post->content }}</p>
        <hr>
    @empty
        <p>Nenhum Post.</p>
    @endforelse
    
@endsection




