@extends('layouts.main')

@section('container')
<main class="form-signin login py-5">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <img src="/img/auth/login.png" class="img-fluid w-75" alt="">
            </div>
            <div class="col d-flex align-items-center">
                <div class="container">
                    <form action="/login" method="POST">
                        <h3 class="text-center">Log In</h3>
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group mt-4">
                                <h4>Email</h4>
                                <input type="email" name ="email" class="form-control" id="email" placeholder="name@example.com" autofocus required>
                            </div>
                            <div class="col-md-12 form-group mt-3">
                                <h4>Password</h4>
                                <input type="password" name ="password" class="form-control" id="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="text-center mt-4"><button class="btn btn-dark py-2" type="submit">Login</button></div>
                    </form>
            </div>
        </div>
    </div>
  </main>
  <!--
  <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 bg-danger">
                    <img src="/img/images.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3>Log In</h3>
                    <form action="/login" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group mt-3">
                                <input type="email" name ="email" class="form-control" id="email" placeholder="name@example.com" autofocus required>
                            </div>
                            <div class="col-md-12 form-group mt-3">
                                
                                <input type="password" name ="password" class="form-control" id="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="text-center"><button class="btn btn-primary w-100 py-2" type="submit">Login</button></div>
                    </form>
                </div>
            </div>
        </div>
-->
  
@endsection