@extends('layout')
@section('content')
<h1>Ajouter un livre</h1>
<form method="POST" action="{{route('books.store')}}" enctype="multipart/form-data">
	@csrf
	<div class="form-group mb-3">
		<label>Nom du livre</label>
		<input type="text" name="name" class="form-control" />
	</div>

	<div class="form-group mb-3">
		<label>Image</label>
		<input type="file" name="image" class="form-control" />
	</div>

	<div class="form-group mb-3">
		<label>Lien Amazon</label>
		<input type="text" name="amazon_link" class="form-control" />
	</div>

	<div class="form-group mb-3">
		<label>Date de publication</label>
		<input type="date" name="published" class="form-control" />
	</div>

	<div class="form-group mb-3">
		<label>Description</label>
		<textarea name="description" class="form-control">Résumé du livre</textarea>
	</div>

	<div class="form-group mb-3">
		<label>Prix</label>
		<input type="number" name="price" class="form-control" />
	</div>
	{{-- <div class="form-group mb-3">
    <label >Race :</label>
    <select class="form-control" name="category_id">
			@foreach($categories as $item)
      <option value="{{$item->id}}">{{$item->name}}</option>
			@endforeach
    </select>
	</div> --}}

	<div class="form-group mb-3">
		<button type="submit" class="btn btn-primary">Ajouter</button>
		<a href="/">Retour</a>
	</div>
</form>
@endsection