@extends('layouts.main')

@section('container')
<main class="form-signin w-100 m-auto">
    <form action="/login" method="POST">
      @csrf
      <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      
  
      <div class="form-floating">
        <input type="email" name ="email" class="form-control" id="email" placeholder="name@example.com" autofocus required>
        <label for="email">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" name ="password" class="form-control" id="password" placeholder="Password">
        <label for="password">Password</label>
      </div>
  
      
      <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
      
    </form>
  </main>

  <!-- Login -->
        {{-- <section id="login" class="login">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <!-- Make image in the middle -->
                        <img src="/img/images.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>Log In</h3>
                        <form action="/login" method="POST" role="form" class="php-email-form">
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
        </section> --}}
  
@endsection