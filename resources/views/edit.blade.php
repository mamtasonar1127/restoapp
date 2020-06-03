@extends('layout')

@section('content')
<div class="col-sm-6">
    <h1>Edit Restaurant</h1>
    <form method="post" action="addRestuarant">
    @csrf
        <div class="form-group">
            <label>Restuarant Name</label>
            <input type="text" class="form-control" name="restuarantname" value="{{$data->name}}" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text"  name="email" class="form-control" value="{{$data->email}}" placeholder="Enter email:name@example.com">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text"  name="address" class="form-control" value="{{$data->address}}" placeholder="Enter address">
        </div>
        <button type="submit" class="btn btn-primary">Add Restaurant</button>
    </form>
</div>
@stop