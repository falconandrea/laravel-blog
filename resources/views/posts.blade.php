@extends('layouts.base')

@section('content')
    @foreach($posts as $post)
        <x-post :post="$post"/>
    @endforeach
@endsection
