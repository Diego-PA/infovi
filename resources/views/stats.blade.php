@extends('layouts.default')

@section('content')

    <center>
        <div class="container">
            <img src="https://github.com/Diego-PA/infovi/blob/main/public/logo.png?raw=true" class="rounded mx-auto d-block" width="300" height="300">
        </div>
    </center>

    <div class="login-form">
        <form action="/examples/actions/confirmation.php" method="post">
            <h2 class="text-center">Log in</h2>       
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </div>
            <div class="clearfix">
                <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                <a href="#" class="float-right">Forgot Password?</a>
            </div>        
        </form>
        <p class="text-center"><a href="#">Create an Account</a></p>
    </div>
    @endsection('content')