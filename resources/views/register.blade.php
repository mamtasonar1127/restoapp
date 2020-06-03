@extends('layout')

@section('content')
<div>
    <h1>User Registration</h1>
    <div class="col-sm-8">
        <form method="post" action="register">
        @csrf
            <div class="form-group" >
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name">
            </div>
            <div class="form-group" >
                <label>Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter Email">
            </div>
            <div class="form-group" >
                <label>Contact</label>
                <input type="text" class="form-control" name="contact" placeholder="Enter Contact No.">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password"  placeholder="Enter Password">
            </div>
            
            <button type="submit" class="btn btn-primary">Get Register</button>
        </form>
    </div>
</div>

@stop   