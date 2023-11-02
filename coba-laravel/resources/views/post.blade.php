@extends('layouts.main')


@section('container')

<h2>{{ $post->title }}</h2>
<p>By. Gilman Arief in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
{!! $post->body !!}


<a href="/posts"> Back to Posts</a>
@endsection