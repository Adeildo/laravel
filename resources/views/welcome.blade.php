@extends('layout.master')

@section('title')
    Welcome!
@endsection

@section('content')
    @include('includes.message-block')
    <div class="row">
        <!-- SIGN UP -->
        <div class="col-lg-6">
            <h3>Sign Up</h3>
            <form action="{{ route('signup') }}" method="post">
 
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Your E-Mail:</label>
                    <input type="email" name="email" id="email" 
                    class="form-control"
                    value="{{ Request::old('email') }}">
                </div>
                
                <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                    <label for="first_name">Your First Name:</label>
                    <input type="text" name="first_name" id="first_name"
                    class="form-control" value="{{ Request::old('first_name') }}">
                </div>
                
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Your Password:</label>
                    <input type="password" name="password" id="password"
                    class="form-control">
                </div>
                    <button type="submit" name="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    
                </div>
            </form>
        
        <!-- SIGN IN -->
        <div class="col-lg-6">
            <h3>Sign In</h3>
            <form action="{{ route('signin') }}" method="post">
                
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Your E-Mail:</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ Request::old('email') }}">
                </div>
                
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="email">Your Password:</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                </div>
            </form>
        </div>
    </div>
@endsection