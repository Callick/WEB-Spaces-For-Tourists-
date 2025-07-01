@extends('layouts.master')

@section('title', 'Search Results for: ' . $query)

@section('content')
<div class="container mt-5">
    <h3 class="mb-4">Search Results for: <em>{{ $query }}</em></h3>

    @if($notFound)
        <div class="alert alert-warning">No results found for: <strong> {{ $query }}</strong></div>

        <h4 class="mt-5">Suggested Places</h4>
        <div class="row">
            @foreach($suggested as $item)
                <div class="col-sm-4 mb-4 d-flex align-items-stretch">
                    <div class="card w-100 h-100 shadow-sm" id="card-zoom-effect">
                        <a href="{{ route('place.details', $item->id) }}" style="text-decoration: none; color: inherit; width: 100%;">
                            <img src="{{ asset('uploads/' . $item->image) }}"
                                class="card-img-top object-fit-cover"
                                alt="{{ $item->placeName }}"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $item->placeName }}</h5>
                                <p class="card-text text-truncate" style="max-height: 4.8em; overflow: hidden;">
                                    {{ $item->placeShortdes }}
                                </p>
                                <p class="mt-auto" id="placeLoc"><i class="fa-solid fa-map-location-dot"></i> {{ $item->placeLocation }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="row">
            @foreach($results as $res)
                <div class="col-sm-4 mb-4 d-flex align-items-stretch">
                    <div class="card w-100 h-100 shadow-sm" id="card-zoom-effect">
                        <a href="{{ route('place.details', $res->id) }}" style="text-decoration: none; color: inherit; width: 100%;">
                            <img src="{{ asset('uploads/' . $res->image) }}"
                                class="card-img-top object-fit-cover"
                                alt="{{ $res->placeName }}"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $res->placeName }}</h5>
                                <p class="card-text text-truncate" style="max-height: 4.8em; overflow: hidden;">
                                   <strong> {{ $res->placeShortdes }} </strong>
                                </p>
                                <p class="mt-auto" id="placeLoc"><i class="fa-solid fa-map-location-dot"></i> <strong> {{ $res->placeLocation }} </strong></p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
