@extends('layouts.base')

@section('content')
    <h2>{{  $post->title }}</h2>
    <p>By <a href="/authors/{{ $post->author->username }}" title="">{{ $post->author->name }}</a> in <a href="/categories/{{  $post->category->slug }}" title=""><small>{{ $post->category->name }}</small></a></p>
    <p>{{ $post->subtitle }}</p>
    <div>{!! $post->description !!}</div>
    <a href="/" title="">Go back</a>
@endsection
