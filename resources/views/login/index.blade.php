@extends('layouts.main')

@section('container')
  <div class="row justify-content-center">
    <div class="col-lg-4">
      <main class="form-signin w-100 m-auto">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <p class="m-0">{{ session('success') }}</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form>
          <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
        <p class="text-center my-3">Not registered? <a href="/register">Register Now!</a></p>
      </main>
    </div>
  </div>
@endsection
