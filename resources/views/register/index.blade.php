@extends('layouts.main')

@section('container')
<main class="form-registration w-100 m-auto">
    <form action="/register" method="POST">
        @csrf
      <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <div class="form-floating">
        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
        <label for="name">Name</label>
      </div>
      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
        <label for="alamat">Alamat</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        <label for="password">Password</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox"  id="role" name="role">
        <label class="form-check-label" for="role">
          Daftar sebagai seller?
        </label>
      </div>
      
      <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
      
    </form>
  </main>
  
@endsection