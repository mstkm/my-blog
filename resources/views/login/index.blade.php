@extends('layouts.main')

@section('container')
  <div class="row justify-content-center">
    <div class="col-lg-4">
      <main class="form-signin w-100 m-auto">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <p class="m-0">{{ session('success') }}</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <p class="m-0">{{ session('loginError') }}</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form action="/login" method="post">
          @csrf
          <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus>
            <label for="email">Email address</label>
            @error('email')
              <div class="invalid-tooltip end-0">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
            <label for="password">Password</label>
            @error('password')
              <div class="invalid-tooltip end-0">
                {{ $message }}
              </div>
            @enderror
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
        <p class="text-center my-3">Not registered? <a href="/register">Register Now!</a></p>
      </main>
    </div>
  </div>
@endsection
