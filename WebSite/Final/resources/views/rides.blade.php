@extends('template')

@section('content')

<form id="searchForm">
    <input type="text" id="searchInput" name="query" placeholder="Rechercher une attraction...">
    <button type="submit">Rechercher</button>
</form>
<h1>Liste des Attractions</h1>

<ul id="ridesList">
    @foreach($rides as $ride)
        <li>
            <strong>Nom:</strong> {{ $ride->name }} <br>
            <strong>Capacité:</strong> {{ $ride->capacity }} <br>
            @if($ride->type)
                <strong>Type:</strong> {{ $ride->type->name }} <br>
            @else
                <strong>Type:</strong> Non spécifié <br>
            @endif
            <a href="{{ route('park.show', ['id' => $ride->park_id]) }}">Voir le parc</a>
        </li>
        <br>
    @endforeach
</ul>

@endsection


<script src="{{ asset('JS/attractionsSearch.js') }}"></script>
@section('css')
<link rel="stylesheet" href="{{ asset('CSS/destinations.css') }}">
@endsection