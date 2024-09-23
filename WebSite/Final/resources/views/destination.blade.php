@extends('template')

@section('content')
<section>
    <h2>Localisation sur la Carte</h2>
    <h3>Fuseau horaire : {{ $destination->timezone }}</h3>
    <iframe width="{{ $destination->width }}" height="{{ $destination->height }}" id="gmap_canvas"
        src="https://maps.google.com/maps?q={{ $destination->latitude }},{{ $destination->longitude }}&t=&z=13&ie=UTF8&iwloc=&output=embed"
        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    @foreach($parks as $park)
        <div class="park">
            <h1>{{ $park->name }}</h1>
            <a href="{{ route('park.show', ['id' => $park->id]) }}">
                @if($park->image)
                    <img src="{{ $park->image }}" alt="{{ $park->name }}">
                @else
                    <img src="https://static.vecteezy.com/system/resources/previews/005/337/799/original/icon-image-not-found-free-vector.jpg"
                        alt="image">
                @endif
            </a>
        </div>
    @endforeach
</section>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('CSS/destination.css') }}">
@endsection