@extends('dashboardUser.layouts.main')
@section('container')

<main>
  <div class="container" style="padding: 0 400px 0 400px">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edit Profile</h1>  
    </div> 

    <form  method="POST" action="/dashboardUser/profile">
      @method('put')
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $name = Auth::user()->name }}">
      </div>
      <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="{{ $email = Auth::user()->email }}">
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $alamat = Auth::user()->alamat }}">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="pasword">
        </div>
        
        
      <div class="d-flex justify-content-center mb-3">
        <button type="submit" class="btn btn-dark">Submit</button>
      </div>
      
    </form>
  </div>
</main>

@endsection