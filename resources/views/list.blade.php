@extends('layout')

@section('content')
<div>
    <h1>List of Restuarants</h1>

    <!-- {{print_r($data)}} -->

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->email}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@stop