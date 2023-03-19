@extends('layouts.main')

@section('container')
  <h1>Halaman About</h1>
  <div class="mt-4">
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="images/{{ $image }}" alt="{{ $name }}" width="200"/>
  </div>
@endsection
