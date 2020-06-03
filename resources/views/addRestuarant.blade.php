@extends('layout')

@section('content')
<div class="col-sm-6">
    <h1>Add New Restaurant</h1>
    <form method="post" action="addRestuarant">
    @csrf
        <div class="form-group">
            <label>Restuarant Name</label>
            <input type="text" class="form-control" name="restuarantname" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text"  name="email" class="form-control" placeholder="Enter email:name@example.com">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text"  name="address" class="form-control" placeholder="Enter address">
        </div>
        <button type="submit" class="btn btn-primary">Add Restaurant</button>
    </form>
</div>
@stop