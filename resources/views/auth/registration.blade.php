<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

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

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

</html>
