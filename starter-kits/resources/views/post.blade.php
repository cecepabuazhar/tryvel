@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>{{ $post->tittle }}</h1>
            <h3>Author : {{ $post->user->name }}</h3>
            <p>{{ $post->body }}</p>
            <a href="/blog">Back to blog</a>
        </div>
    </div>
@endsection
