@extends('layouts.app')

@section('content')
<div class="container">
<h2 class="text-center">UPDATING A TRIP !</h2>
<form action="{{route('admin.trip.update', $edit->id)}}" method="post">
   @csrf
   <div class="mb-3">
      <label class="form-label">City</label>
      <input type="text" name="city" class="form-control" value="{{$edit->city}}">
    </div>
   <div class="mb-3">
      <label class="form-label">Counrty</label>
      <input type="text" name="country" class="form-control" value="{{$edit->country}}">
    </div>
   <div class="mb-3">
      <label class="form-label">Continent</label>
      <input type="text" name="continent" class="form-control" value="{{$edit->continent}}">
    </div>
   <div class="mb-3">
      <label class="form-label">Prix</label>
      <input type="text" name="price" class="form-control" value="{{$edit->price}}">
    </div>
   <div class="mb-3">
      <label class="form-label">Organizer</label>
      <input type="text" name="organizer" class="form-control" value="{{$edit->organizer}}">
   </div>
   <div class="mb-3">
      <label class="form-label">Rating</label>
      <input type="text" name="rating" class="form-control" value="{{$edit->rating}}">
   </div>
   <div class="mb-3">
      <label class="form-label">Image</label>
      <input type="text" name="image" class="form-control" value="{{$edit->img}}">
   </div>
    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea class="form-control" name="description" cols="30" rows="5">{{$edit->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Add Trip</button>
</form>
</div>
@endsection