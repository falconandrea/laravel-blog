@extends('layouts.base')

@section('content')
    @foreach($posts as $post)
        <x-post :post="$post"/>
    @endforeach
    @if (Route::current()->getName() != 'home')
        <a href="/" title="">Go back</a>
    @endif
@endsection
