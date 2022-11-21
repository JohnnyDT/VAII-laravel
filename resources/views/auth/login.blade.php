@extends('master')
@section('title', 'Login')

@section('content')

    <body>

        <div class="container">
            <div class="row">

                <div class="col-md-3 col-md-offset-1" style="margin-top: 100px">
                    <img src="{{ url('/images/user.png') }}" alt="Image" width="200" height="200" />
                </div>

                <div class="col-md-4 col-md-offset-2" style="margin-top: 20px">
                    <h2>User login</h2>
                    <hr>
                    <form action="{{ route('login-user') }}" method="POST">

                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        @if (Session::has('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                        @endif

                        @csrf

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Your Email" name="email"
                                value="{{ old('email') }}">

                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" placeholder="Enter Your Password" name="password"
                                value="">

                            <span class="text-danger">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-primary button-style" type="submit">
                                Login
                            </button>
                        </div>
                        <br>
                        <div class="txt">
                            Create an account?
                            <a href="registration">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </body>

@endsection
