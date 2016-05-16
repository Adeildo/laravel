@extends('layout.master')

@section('title')
    Welcome!
@endsection

@section('content')
    <div class="row">
        <!-- SIGN UP -->
        <div class="col-lg-6">
            <h3>Sign Up</h3>
            <form action="{{ route('signup') }}" method="post">
                <div class="form-group">
                    <label for="email">Your E-Mail:</label>
                    <input type="email" name="email" id="email" class="form-control">
                    
                    <label for="email">Your First Name:</label>
                    <input type="text" name="first_name" id="first_name" class="form-control">
                    
                    <label for="email">Your Password:</label>
                    <input type="password" name="password" id="password" class="form-control">
                    
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </div>
            </form>
        </div>
        <!-- SIGN IN -->
        <div class="col-lg-6">
            <h3>Sign In</h3>
            <form action="{{ route('signin') }}" method="post">
                <div class="form-group">
                    <label for="email">Your E-Mail:</label>
                    <input type="email" name="email" id="email" class="form-control">
                    
                    <label for="email">Your Password:</label>
                    <input type="password" name="password" id="password" class="form-control">
                    
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </div>
            </form>
        </div>
    </div>
@endsection