@extends('layouts.landing.app')

@section('content')

    @foreach ($post as $p)
    <div class="card">
        <div class="card-body">
       <a href="/post/{{ $p['slug'] }}"> <h1>{{ $p['tittle'] }}</h1></a>
        <h3>Author : {{ $p->user->name }}</h3>
        <h5>{{ $p['excerpt'] }}</h5>
        </div>
    </div>
    @endforeach


@endsection
