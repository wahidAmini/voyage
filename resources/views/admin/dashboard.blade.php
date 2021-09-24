@extends('layouts.app')

@section('content')
<div class="container">


<h2 class="text-center">TRIP MANAGEMENTS !</h2>
<a href="{{route('admin.trips.create')}}" class="btn btn-primary btn-lg float-end mb-2">Add Trip</a>
<table class="table">
   <thead>
     <tr>
       <th scope="col">ID</th>
       {{-- <th scope="col">Date</th> --}}
       <th scope="col">City</th>
       <th scope="col">Country</th>
       <th scope="col">Action</th>
       <th scope="col">Action</th>
       <th scope="col">Action</th>
     </tr>
   </thead>
   <tbody>
      @foreach ($trips as $trip)
     <tr>
       <th scope="row">{{$trip->id}}</th>
       <td class="fw-bold">{{$trip->city}}</td>
       {{-- <td>{{$trip->timestamps}}</td> --}}
       <td>{{$trip->country}}</td>

       <td><a class="btn btn-info" href="{{route('tripdetail', $trip->id)}}">Detail</a></td>
       <td><a class="btn btn-success" href="{{route('admin.trip.edit',$trip->id)}}">Update</a></td>
       <td><a class="btn btn-danger" href="{{route('admin.trip.delete',$trip->id)}}">Delete</a></td>
       
     </tr>
     @endforeach
   </tbody>
 </table>
</div>
@endsection