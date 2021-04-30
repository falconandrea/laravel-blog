@extends('layouts.base')

@section('content')
    <h1>
        {{ $post->title }}
    </h1>
    <p>{{ $post->subtitle }}</p>
    <div>{!! $post->description !!}</div>
@endsection
