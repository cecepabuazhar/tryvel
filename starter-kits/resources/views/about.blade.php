@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
    <img src="{{ $image }}" alt="" width="10%">
    <h1>{{ $name }}</h1>
  </div>
</div>
@endsection
