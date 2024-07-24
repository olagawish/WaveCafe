@extends('layouts.app')

@section('content')
      <div class="login_wrapper">
            <div class="animate form login_form">
            <section class="login_content">
                <form method="POST" action="{{ route('login') }}">
                @csrf

                <h1>Login Form</h1>
                <div>
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" required />
                    
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required />

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div>
                        <button type="submit" class="btn btn-default submit">Log in</button>
                        <a class="reset_pass" href="{{ route('password.request') }}">Lost your password?</a>
                    </div>


                <div class="clearfix"></div>

                <div class="separator">
                    <p class="change_link">New to site?
                    <a href="{{ route('register') }}" class="to_register">{{ __(' Create Account') }} </a>
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