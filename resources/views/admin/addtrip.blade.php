@extends('layouts.app')

@section('content')
<div class="container">
<h2 class="text-center">ADDING A TRIP !</h2>
<form action="{{route('admin.trips.store')}}" method="post">
   @csrf
   <div class="mb-3">
      <label class="form-label">City</label>
      <input type="text" name="city" class="form-control" placeholder="city">
    </div>
   <div class="mb-3">
      <label class="form-label">Counrty</label>
      <input type="text" name="country" class="form-control" placeholder="country">
    </div>
   <div class="mb-3">
      <label class="form-label">Continent</label>
      <input type="text" name="continent" class="form-control" placeholder="continent">
    </div>
   <div class="mb-3">
      <label class="form-label">Prix</label>
      <input type="text" name="price" class="form-control" placeholder="Price ..">
    </div>
   <div class="mb-3">
      <label class="form-label">Organizer</label>
      <input type="text" name="organizer" class="form-control" placeholder="organizer">
   </div>
   <div class="mb-3">
      <label class="form-label">Rating</label>
      <input type="text" name="rating" class="form-control" placeholder="rating">
   </div>
   <div class="mb-3">
      <label class="form-label">Image</label>
      <input type="text" name="image" class="form-control" placeholder="image">
   </div>
    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea class="form-control" name="description" placeholder="description" cols="30" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Add Trip</button>
</form>
</div>
@endsection