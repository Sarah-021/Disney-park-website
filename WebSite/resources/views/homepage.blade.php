@extends ('template')
@section ('content')
<section id="site-intro">
    <h2>Bienvenue sur notre plate-forme de recensement des parcs d'attraction</h2>
    <h3>Ici, vous pouvez trouver des informations sur les parcs d'attraction à travers le monde entier !!!</h3>
</section>


<section id="highlighted-park">
    <h2>{{ $highlightedPark['name'] }}</h2> <!--parc random voir controller-->
    <div id="park-info">
        @if (!empty($highlightedPark['image']))
            <img src="{{ $highlightedPark['image'] }}" alt="{{ $highlightedPark['name'] }}">
        @else
        <img src="https://cdn1.parksmedia.wdprapps.disney.com/resize/mwImage/1/1600/900/75/dam/disneyland/attractions/disneyland/sleeping-beauty-castle-walkthrough/sleeping-beauty-castle-exterior-16x9.jpg?1699632197159"
            alt="Image par défaut">
        @endif      </div>
</section>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('CSS/homepage.css') }}">
@endsection