@extends('layouts.base')

@section('content')
    <h2>{{  $post->title }}</h2>
    <p><a href="/categories/{{  $post->category->slug }}" title=""><small>{{ $post->category->name }}</small></a></p>
    <p>{{ $post->subtitle }}</p>
    <div>{!! $post->description !!}</div>
    <a href="/" title="">Go back</a>
@endsection