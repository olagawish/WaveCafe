@extends('layouts.app')

@section('content')
    <div class="login_wrapper">
      <div class="animate form registration_form">
        <section class="login_content">
          <form method="POST" action="{{ route('register') }}">
            @csrf

            <h1>Create Account</h1>
            <div>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Fullname" value="{{ old('name') }}" required />

              @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div>
              <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}" required />
              
              @error('username')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div>
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required />
              
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div>
              <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required />
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required />
            </div>

            <div>
            <button type="submit" class="btn btn-default submit">Submit</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Already a member ?
                <a href="{{ route('login') }}" class="to_register"> Log in </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-graduation-cap"></i></i> Beverages Admin</h1>
                <p>©2016 All Rights Reserved. Beverages Admin is a Bootstrap 4 template. Privacy and Terms</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
@endsection
