@extends('master')
@section('title', 'Tabulka')

@section('content')

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 20px">
                <h2>Registration</h2>
                <hr>
                <form action="{{ route('register-user') }}" method="POST">

                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif

                    @if (Session::has('fail'))
                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                    @endif

                    @csrf

                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter Full Name" name="name"
                            value="{{ old('name') }}">

                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>

                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Your Email" name="email"
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
                            value="{{ old('password') }}">

                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>

                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">
                            Register
                        </button>
                    </div>
                    <br>
                    <div class="txt">
                        Do have an account?
                        <a href="login">Log In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

@endsection