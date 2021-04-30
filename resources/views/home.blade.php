@extends('layouts.base')

@section('content')
    <h1>
        Title
    </h1>
    @foreach($posts as $post)
        <h2>{{  $post->title }}</h2>
        <p>{{ $post->subtitle }}</p>
        <div>{!! $post->description !!}</div>
    @endforeach
@endsection
