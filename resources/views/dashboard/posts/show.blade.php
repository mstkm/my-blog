@extends('dashboard.layouts.main')

@section('container')
  <div class="mt-3 mb-5">
    <h1>{{ $post->title }}</h1>

    <a href="/dashboard/posts" class="btn btn-sm btn-success"><span data-feather="arrow-left" class="align-text-bottom"></span> Back to all my posts</a>
    <a href="" class="btn btn-sm btn-warning"><span data-feather="edit" class="align-text-bottom"></span> Edit</a>
    <a href="" class="btn btn-sm btn-danger"><span data-feather="x-circle" class="align-text-bottom"></span> Delete</a>

    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid mt-3" alt="$post->title">

    <article class="my-3">
      {!! $post->body !!}
    </article>
  </div>
@endsection
