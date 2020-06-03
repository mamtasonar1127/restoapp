@extends('layout')

@section('content')
<div>
    <h1>Login Registration</h1>
    <div class="col-sm-8">
        <form method="post" action="login">
        @csrf
            <div class="form-group" >
                <label>Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password"  placeholder="Enter Password">
            </div>
            
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>

@stop   