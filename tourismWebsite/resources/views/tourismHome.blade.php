

@extends('layouts.master')
@section('title', 'Tourism Porto | Home')
@section('links')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
@section('styles')
<style>
    .slider-container {
        position: relative;
        overflow: hidden;
        padding: 20px 0;
        margin: 0 auto;
    }

    .slider-card .card-title,
    .slider-card .place-location {
        text-align: center;
    }
    .slider-track {
        display: flex;
        transition: transform 0.5s ease;
        gap: 20px;
        padding: 10px 0;
        justify-content: center;
    }

    .slider-card {
        flex: 0 0 220px;
        height: 280px;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        background: white;
    }

    .slider-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }

    .slider-card img {
        width: 100%;
        height: 140px;
        object-fit: cover;
        display: block;
    }

    /* Animation for sliding */
    @keyframes slideIn {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }

    .slider-card.entering {
        animation: slideIn 0.5s forwards;
    }

    /* Responsive adjustments */
    @media (max-width: 1200px) {
        .slider-card { flex: 0 0 200px; }
    }

    @media (max-width: 992px) {
        .slider-card { flex: 0 0 180px; }
    }

    @media (max-width: 768px) {
        .slider-card { 
            flex: 0 0 160px;
            height: 260px; 
        }
        .slider-card img { height: 120px; }
    }

    @media (max-width: 576px) {
        .slider-card { 
            flex: 0 0 140px;
            height: 240px; 
        }
    }
</style>
@endsection
@section('content')

<!-- Page content -->
    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Recently Added
            </h2>
        </div>
        <div class="slider-container">
            <div class="slider-track" id="sliderTrack">
                @foreach($marqueePlaces as $marqpla)
                    <div class="slider-card">
                        <a href="{{ route('place.details', $marqpla->id) }}" style="text-decoration: none; color: inherit;" target="_blank">
                            <img src="{{ asset('uploads/' . $marqpla->image) }}" 
                                alt="{{ $marqpla->placeName }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $marqpla->placeName }}</h5>
                                <p class="place-location">
                                    <i class="fa-solid fa-map-location-dot"></i> 
                                    {{ $marqpla->placeLocation }}
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Historical Places
            </h2>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <a href="{{ route('places.byCategory', ['category' => 'Historical']) }}" class="text-primary float-end"><i class="fa-regular fa-square-caret-right fa-bounce"></i></a>
            </div>
        </div>
        <div class="row">
            @foreach($historicalPlaces as $hispla)
                <div class="col-sm-4 mb-4 d-flex align-items-stretch">
                    <div class="card w-100 h-100 shadow-sm" id="card-zoom-effect">
                        <a href="{{ route('place.details', $hispla->id) }}" style="text-decoration: none; color: inherit; width: 100%;">
                            <img src="{{ asset('uploads/' . $hispla->image) }}"
                                class="card-img-top object-fit-cover"
                                alt="{{ $hispla->placeName }}"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $hispla->placeName }}</h5>
                                <p class="card-text text-truncate" style="max-height: 4.8em; overflow: hidden;">
                                    {{ $hispla->placeShortdes }}
                                </p>
                                <p class="mt-auto" id="placeLoc"><i class="fa-solid fa-map-location-dot"></i> {{ $hispla->placeLocation }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                To-Do Things
            </h2>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <a href="{{ route('places.byCategory', ['category' => 'To-Do']) }}" class="text-primary float-end"><i class="fa-regular fa-square-caret-right fa-bounce"></i></a>
            </div>
        </div>
        <div class="row">
            @foreach($todoPlaces as $todo)
                <div class="col-sm-4 mb-4 d-flex align-items-stretch">
                    <div class="card w-100 h-100 shadow-sm" id="card-zoom-effect">
                        <a href="{{ route('place.details', $todo->id) }}" style="text-decoration: none; color: inherit; width: 100%;">
                            <img src="{{ asset('uploads/' . $todo->image) }}"
                                class="card-img-top object-fit-cover"
                                alt="{{ $todo->placeName }}"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $todo->placeName }}</h5>
                                <p class="card-text text-truncate" style="max-height: 4.8em; overflow: hidden;">
                                    {{ $todo->placeShortdes }}
                                </p>
                                <p class="mt-auto" id="placeLoc"><i class="fa-solid fa-map-location-dot"></i> {{ $todo->placeLocation }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                For Traditional Dishes
            </h2>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <a href="{{ route('places.byCategory', ['category' => 'Restaurant']) }}" class="text-primary float-end"><i class="fa-regular fa-square-caret-right fa-bounce"></i></a>
            </div>
        </div>
        <div class="row">
            @foreach($restaurantPlaces as $restaurant)
                <div class="col-sm-4 mb-4 d-flex align-items-stretch">
                    <div class="card w-100 h-100 shadow-sm" id="card-zoom-effect">
                        <a href="{{ route('place.details', $restaurant->id) }}" style="text-decoration: none; color: inherit; width: 100%;">
                            <img src="{{ asset('uploads/' . $restaurant->image) }}"
                                class="card-img-top object-fit-cover"
                                alt="{{ $restaurant->placeName }}"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $restaurant->placeName }}</h5>
                                <p class="card-text text-truncate" style="max-height: 4.8em; overflow: hidden;">
                                    {{ $restaurant->placeShortdes }}
                                </p>
                                <p class="mt-auto" id="placeLoc"><i class="fa-solid fa-map-location-dot"></i> {{ $restaurant->placeLocation }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        
@endsection
@section('scripts')
    <script>
        // Marquee places data
        const places = @json($marqueePlaces);
        // Slider configuration
        const config = {
            visibleCards: 5,
            cardsToMove: 1,
            slideInterval: 3000,
            animationDuration: 500
        };

        const sliderTrack = document.getElementById('sliderTrack');
        const cards = Array.from(sliderTrack.querySelectorAll('.slider-card'));
        
        // Start auto sliding
        setInterval(slideCards, config.slideInterval);

        function slideCards() {
            // Get current cards
            const currentCards = Array.from(sliderTrack.querySelectorAll('.slider-card'));
            
            // Remove the first X cards
            const cardsToMove = currentCards.splice(0, config.cardsToMove);
            
            // Add animation class
            cardsToMove.forEach(card => card.classList.add('entering'));
            
            // Move the cards to the end
            cardsToMove.forEach(card => {
                sliderTrack.appendChild(card);
                
                // Remove animation class after animation completes
                setTimeout(() => {
                    card.classList.remove('entering');
                }, config.animationDuration);
            });
        }
    </script>
@endsection
 <!-- row -->
    <!--    <div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
                <a href="javascript:void(0);" class="btn btn-primary tm-btn-prev mb-2 disabled">Previous</a>
                <div class="tm-paging d-flex">
                    <a href="javascript:void(0);" class="active tm-paging-link">1</a>
                    <a href="javascript:void(0);" class="tm-paging-link">2</a>
                    <a href="javascript:void(0);" class="tm-paging-link">3</a>
                    <a href="javascript:void(0);" class="tm-paging-link">4</a>
                </div>
                <a href="javascript:void(0);" class="btn btn-primary tm-btn-next">Next Page</a>
            </div>            
        </div>
    </div>  --> <!-- container-fluid, tm-container-content -->