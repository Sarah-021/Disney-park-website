@extends('template')
@section('content')
<ul class="destinations">

    @foreach($destinations as $dest)

        <li class="destination-item">
            @if (isset($dest->parks[0]->image)) <!--isset return bool -->
                <img src="{{$dest->parks[0]->image}}" alt="image"> <!--recupere l'image du premier parc de la destination-->
            @else
                <img src="https://static.vecteezy.com/system/resources/previews/005/337/799/original/icon-image-not-found-free-vector.jpg"
                    alt="image">
            @endif
            <a href='/destination/{{$dest->id}}' class="card-link">{{ $dest->name}}</a>
        </li>
    @endforeach
</ul>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('CSS/destinations.css') }}">
@endsection