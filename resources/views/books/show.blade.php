@extends('layout')
@section('content')

<div class="card mr-4" style="width: 15rem;">
	<img class="card-img-top p-3" src="/images/{{$book->image}}" alt="Card image cap">
</div>
<h1>{{$book->name}}</h1>
<p>{{$book->description}}</p>


@endsection