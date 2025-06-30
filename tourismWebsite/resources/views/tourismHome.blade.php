

@extends('layouts.master')
@section('title', 'Tourism Porto | Home')
@section('content')

<!-- Page content -->
    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Historical Places
            </h2>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <form action="" class="tm-text-primary">
                    Page <input type="text" value="1" size="1" class="tm-input-paging tm-text-primary"> of 200
                </form>
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
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                To-Do Things
            </h2>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <form action="" class="tm-text-primary">
                    Page <input type="text" value="1" size="1" class="tm-input-paging tm-text-primary"> of 200
                </form>
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
                <form action="" class="tm-text-primary">
                    Page <input type="text" value="1" size="1" class="tm-input-paging tm-text-primary"> of 200
                </form>
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