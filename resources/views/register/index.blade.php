@extends('layouts.main')

@section('container')
<main class="form-registration login py-5">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <img src="/img/auth/register.png" class="img-fluid w-75" alt="">
            </div>
            <div class="col d-flex align-items-center">
                <div class="container">
                    <form action="/register" method="POST">
                        <h3 class="text-center">Register</h3>
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group mt-4">
                                <h4>Name</h4>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                            </div>
                            <div class="col-md-12 form-group mt-3">
                                <h4>Email Address</h4>
                                <input type="email" name ="email" class="form-control" id="email" placeholder="name@example.com" autofocus required>
                            </div>
                            <div class="col-md-12 form-group mt-3">
                                <h4>Alamat</h4>
                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                            </div>
                            <div class="col-md-12 form-group mt-3">
                                <h4>Password</h4>
                                <input type="password" name ="password" class="form-control" id="password" placeholder="Password" required>
                            </div>
                            <div class="col-md-12 form-group mt-4">
                                <input class="form-check-input" type="checkbox"  id="role" name="role">
                                <label class="form-check-label" for="role">
                                  Daftar sebagai Event Organizer?
                                </label>
                            </div>
                        </div>
                        <div class="text-center mt-4"><button class="btn btn-dark py-2" type="submit">Register</button></div>
                    </form>
            </div>
        </div>
    </div>
  </main>
  
@endsection