
<link rel="stylesheet" href="/public/css/welcome.css"> 
@extends('layouts.master') 
@section('title') Welcome @endsection 

@section('content')
<div class="container">
    <div class="row form-sign-signup">
        <div class="col-md-6">
            <h3>Sign up</h3>
            <form action="{{ route('signup') }}" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>


        <div class="col-md-6">
            <h3>Sign in</h3>
            <form action="{{ route('signin') }}" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>

    </div>

</div>
@endsection
