@extends ('template')
@section('content')
<script src="{{ asset('/JS/search.js') }}"></script>


<section id="search">
    <input type="text" id="search-input" placeholder="Rechercher un parc">
    <button id="search-button">Rechercher</button>
</section>

<section id="results" style="display: none;">
    <!-- "style="display: none;"" pour masquer la section par défaut -->
    <h2>Résultats de la recherche</h2>
    <ul id="results-list"></ul>
</section>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('CSS/search.css') }}">
@endsection