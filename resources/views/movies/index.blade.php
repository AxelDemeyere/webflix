@extends('layouts/app')

@section('content')

<a href="/films/creer">Ajouter un film</a>

@foreach ($movies as $movie)
<div>
    <h2>
        {{ $movie->title }}
    </h2>
    <ul>
        <li>Synopsys : {{$movie->synopsys}} </li>
        <li>Durée : {{$movie->duration}} minutes</li>
        <li>Date de sortie : {{ $movie->released_at }}</li>
        <li>Catégorie : {{$movie->category_id}}</li>
    </ul>
    <a href="/films/{{$movie->id}}">Voir</a>
</div>
@endforeach
@endsection