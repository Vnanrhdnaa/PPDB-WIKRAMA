@extends('ppdbs.layout')
     
@section('nav')
<section class="vh-100" style="background-image: url('assets/images/bg-opacity.png')">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                  @if(Session::get('notAllowed'))
                  <div class="alert alert-danger">
                    {{session('notAllowed')}}
                  </div>
                  @endif
                  
                  @if($errors->any())
                  <div class="alert alert-danger">
                    <ul>@foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif 
                  
                  <form class="auth-form login-form" action="{{route('login.auth')}}" method="POST"> 
                    @csrf 
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0">Login</span>
                    </div>
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Masuk ke Akun PPDB-mu</h5>
  
                    <div class="username mb-3">
                      <label class="sr-only" for="username">Email</label>
                      <input id="username" name="email" type="text" class="form-control username" placeholder="Email">
                    </div>
                    <div class="password mb-3">
                      <label class="sr-only" for="signin-password">Password</label>
                      <input id="signin-password" name="password" type="password" class="form-control signin-password" placeholder="Password">
                      
                    </div>
                    <div class="pt-1 mb-4">
                      <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto" >Log In</button>
                    </div>
  
                    
                    <div class="auth-option text-center pt-5">Belum Punya Akun? <a class="text-link" href="{{url('/register')}}" >Register Terlebih dahulu</a>.</div>
                
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>