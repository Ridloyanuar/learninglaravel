@extends('layout/app')

@section('title', $post->judul)
@section('content')

    <div class="container">
     <h1>{{ $post->judul }}</h1>
     <p>{{ $post->body }}</p>
    </div>


@endsection

