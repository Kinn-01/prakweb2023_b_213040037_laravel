@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
           {{-- <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}"> --}}
            <h1 class="mb-3">{{ $post->title }}</h1>
           
            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-box-arrow-in-left"></i> Back To All My Posts</a>
            <a href="" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
            <a href="" class="btn btn-danger"><i class="bi bi-x-circle"></i></i> Delete</a>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>

            <a href="/posts" class="d-block mt-3"> Back to Posts</a>
        </div>
    </div>
</div>
@endsection