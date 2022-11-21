@extends('master')
@section('title', 'Registration')

@section('content')

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4" style="margin-top: 20px">
                    <h2>Welcome to Dashboard!</h2>
                    <hr>

                    <table class="table">
                        <thead>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td><a href="logout">Logout</a></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </body>

@endsection
