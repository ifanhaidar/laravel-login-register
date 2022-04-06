@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-md-4">
    <main class="form-signin">
      <img width="100" height="67" src="{{ ('img/logo.png') }}" class="mx-auto d-block" > 
        <h3 class="h3 mb-2 fw-normal text-center">Please Login</h3>
      <form>
    
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
    
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
       
      </form>
      <small class="d-block text-center p-2">Not Registered? <a href="/register">Register Now</a></small>
    </main>
</div>



@endsection