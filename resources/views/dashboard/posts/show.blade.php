@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left">
                </span> Back to my all posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit">
                </span>edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
                  </form>
                  @if ($post->image)
                  <div style="max-height: 350px; overflow:hidden;">
                  <img src="{{ asset('storage/' . $post->image) }}" alt="{{
                    $post->category->name }}" class="img-fluid mt-4">
                  </div>
                  @else
                    <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}" alt="{{
                    $post->category->name }}" class="img-fluid mt-4">
                  @endif
             <article class="my-3 fs-5">
                {!! $post->body !!}
             </article>
        </div>
    </div>
</div>
@endsection