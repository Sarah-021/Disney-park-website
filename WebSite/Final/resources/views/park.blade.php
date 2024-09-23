@extends('template')

@section('content')
<section id="park-info">
    <h1>Informations du Parc</h1>

    <div class="info-item">
        <h3 class="info-title">Nom:</h3>
        <p class="info-value">{{ $park->name ?: 'Non spécifié' }}</p>
    </div>

    <div class="info-item">
        <h3 class="info-title">Localisation:</h3>
        <p class="info-value">{{ $park->location ?: 'Non spécifié' }}</p>
    </div>

    <div class="info-item">
        <h3 class="info-title">Fuseau horaire:</h3>
        <p class="info-value">{{ $park->timezone ?: 'Non spécifié' }}</p>
    </div>

    <div class="info-item">
        <h3 class="info-title">Latitude:</h3>
        <p class="info-value">{{ $park->latitude ?: 'Non spécifié' }}</p>
    </div>

    <div class="info-item">
        <h3 class="info-title">Longitude:</h3>
        <p class="info-value">{{ $park->longitude ?: 'Non spécifié' }}</p>
    </div>

    <div class="info-item">
        <h3 class="info-title">Taille:</h3>
        <p class="info-value">{{ $park->size ?: 'Non spécifié' }}</p>
    </div>

    <div class="info-item">
        <h3 class="info-title">Coût:</h3>
        <p class="info-value">{{ $park->cost ?: 'Non spécifié' }}</p>
    </div>
    <div class="info-item">
        <h3 class="info-title">Pays:</h3>
        <p class="info-value">{{ $park->country ?: 'Non spécifié' }}</p>
    </div>

    <div class="info-item">
        <h3 class="info-title">Type:</h3>
        <p class="info-value">{{ $park->type ?: 'Non spécifié' }}</p>
    </div>

    <div class="info-item">
        <h3 class="info-title">Année de construction:</h3>
        <p class="info-value">{{ $park->year_built ?: 'Non spécifié' }}</p>
    </div>

    <div class="info-item">
        <h3 class="info-title">Capacité:</h3>
        <p class="info-value">{{ $park->capacity ?: 'Non spécifié' }}</p>
    </div>

    <div class="info-item">
        <h3 class="info-title">URL:</h3>
        <p class="info-value"><a href="{{ $park->url ?: '#' }}">{{ $park->url ?: 'Non spécifié' }}</a></p>
    </div>

    <div class="info-item">
        <h3 class="info-title">Prix Adulte:</h3>
        <p class="info-value">{{ $park->adultPrice ?: 'Non spécifié' }}</p>
    </div>

    <div class="info-item">
        <h3 class="info-title">Prix Enfant:</h3>
        <p class="info-value">{{ $park->childPrice ?: 'Non spécifié' }}</p>
    </div>

    <div class="info-item">
        <h3 class="info-title">Capacité par Visiteur:</h3>
        <p class="info-value">{{ $park->capacityPerAttendance ?: 'Non spécifié' }}</p>
    </div>

    <div class="info-item">
        <h3 class="info-title">Fréquentation par Taille:</h3>
        <p class="info-value">{{ $park->attendancePerSize ?: 'Non spécifié' }}</p>
    </div>

    <div class="info-item">
        <h3 class="info-title">Taille par Capacité:</h3>
        <p class="info-value">{{ $park->sizePerCapacity ?: 'Non spécifié' }}</p>
    </div>

    <div>
        <h3 class="info-title">Image:</h3>
        <img src="{{ $park->image ? $park->image : 'https://static.vecteezy.com/system/resources/previews/005/337/799/original/icon-image-not-found-free-vector.jpg' }}"
            alt="Image du parc" style="max-width: 200px; max-height: 200px;">
    </div>

    <div>
        <h3 class="info-title">Description:</h3>
        <p class="info-value">{{ strip_tags($park->blurb) ?: 'Non spécifié' }}</p> <!--retire les balise html-->
    </div>
</section>


<section id="attractions">
    <h2>Attractions</h2>
    <select id="all-attractions">
        <option value="all">Tous les types</option>
        @foreach($types as $type) 
            <option value="{{$type->id}}">{{$type->name}}</option>
        @endforeach
    </select>
    <div>
        <ul id="Attraction">
            @foreach ($park->rides as $ride)
                <li class="attraction list-items" data-type="{{$ride->type_id}}"> {{$ride->name}}</li>
            @endforeach
        </ul>
    </div>
</section>
<script src="{{ asset('JS/filtering.js') }}"></script>
<!--Fonction qui permet d'aller cherche le fichier sans lui spécifier tout le chemin,(utilise le chemin relatif) -->
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('CSS/park.css') }}">
@endsection