@extends('layout')

@section('content')
<div>
    <h1>List of Restuarants</h1>

    <!-- {{print_r($data)}} -->
    @if(Session::get('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{Session::get('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->email}}</td>
      <td><a href="delete/{{$item->id}}"><i class="fa fa-trash"></i></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@stop