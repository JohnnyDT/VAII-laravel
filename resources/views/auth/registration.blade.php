@extends('master')
@section('title', 'Registration')

@section('content')

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-1" style="margin-top: 100px">
                    <img src="{{ url('/images/user.png') }}" alt="Image" width="200" height="200" />
                </div>

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

                        <!-- Name -->
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

                        <!-- Email -->
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

                        <!-- Password -->
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

                        <!-- Password confirm -->
                        <div class="form-group">
                            <label for="password">Password again</label>
                            <input type="password" class="form-control" placeholder="Enter Your Password"
                                name="password_confirmation" value="{{ old('password') }}">

                            <span class="text-danger">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>

                        <!-- Register - button -->
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

        <script>
            const indicator = document.querySelector(".indicator");
            const input = document.querySelector("input");
            const weak = document.querySelector(".weak");
            const medium = document.querySelector(".medium");
            const strong = document.querySelector(".strong");
            const text = document.querySelector(".text");
            const showBtn = document.querySelector(".showBtn");
            let regExpWeak = /[a-z]/;
            let regExpMedium = /\d+/;
            let regExpStrong = /.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/;

            function trigger() {
                if (input.value != "") {
                    indicator.style.display = "block";
                    indicator.style.display = "flex";
                    if (input.value.length <= 3 && (input.value.match(regExpWeak) || input.value.match(regExpMedium) || input
                            .value.match(regExpStrong))) no = 1;
                    if (input.value.length >= 6 && ((input.value.match(regExpWeak) && input.value.match(regExpMedium)) || (input
                            .value.match(regExpMedium) && input.value.match(regExpStrong)) || (input.value.match(
                            regExpWeak) && input.value.match(regExpStrong)))) no = 2;
                    if (input.value.length >= 6 && input.value.match(regExpWeak) && input.value.match(regExpMedium) && input
                        .value.match(regExpStrong)) no = 3;
                    if (no == 1) {
                        weak.classList.add("active");
                        text.style.display = "block";
                        text.textContent = "Your password is too week";
                        text.classList.add("weak");
                    }
                    if (no == 2) {
                        medium.classList.add("active");
                        text.textContent = "Your password is medium";
                        text.classList.add("medium");
                    } else {
                        medium.classList.remove("active");
                        text.classList.remove("medium");
                    }
                    if (no == 3) {
                        weak.classList.add("active");
                        medium.classList.add("active");
                        strong.classList.add("active");
                        text.textContent = "Your password is strong";
                        text.classList.add("strong");
                    } else {
                        strong.classList.remove("active");
                        text.classList.remove("strong");
                    }
                    showBtn.style.display = "block";
                    showBtn.onclick = function() {
                        if (input.type == "password") {
                            input.type = "text";
                            showBtn.textContent = "HIDE";
                            showBtn.style.color = "#23ad5c";
                        } else {
                            input.type = "password";
                            showBtn.textContent = "SHOW";
                            showBtn.style.color = "#000";
                        }
                    }
                } else {
                    indicator.style.display = "none";
                    text.style.display = "none";
                    showBtn.style.display = "none";
                }
            }
        </script>

    </body>

@endsection
