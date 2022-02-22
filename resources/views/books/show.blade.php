@extends('layout')
@include('layouts.navigation')

@section('content')

<div class="card mr-4" style="width: 15rem;">
	<img class="card-img-top p-3" src="/images/{{$book->image}}" alt="Card image cap">
</div>
<h1>{{$book->name}}</h1>
<p>{{$book->description}}</p>
{{-- ['reader_id', 'book_id','comment', 'rating']; --}}

<form method="POST" action="{{route('reviews.store')}}">
	@csrf
	<input type="hidden" name="book_id" value="{{$book->id}}">
  <div class="form-group">
    <label for="rating">Ajouter une note</label>
    <input type="number" min="1" max="5" name="rating" type="email" class="form-control" id="" placeholder="Note de 1 à 5">
  </div>

  <div class="form-group">
    <label for="comment">Commentaire</label>
    <textarea class="form-control" id="" name="comment"  rows="3">Avis sur le livre</textarea>
  </div>

	<div class="form-group mb-3">
		<button type="submit" class="btn btn-primary">Ajouter</button>

	</div>
</form>

<h1>Commentaires</h1>
@foreach($reviewsList as $item)
<div>Utilisateur: {{$item->userName}}</div>
<div>Note: {{$item->rating}}</div>

<p>{{$item->comment}} </p>
@endforeach

@endsection


