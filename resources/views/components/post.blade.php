<div>
    <h2><a href="/post/{{ $post->slug }}" title="">{{  $post->title }}</a></h2>
    <p><a href="/categories/{{  $post->category->slug }}" title=""><small>{{ $post->category->name }}</small></a></p>
    <p>{{ $post->subtitle }}</p>
    <div>{!! $post->description !!}</div>
</div>