@extends('layouts.master')

@section('title', $category . ' Places')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">{{ $category }} Places</h2>

    @if($places->isEmpty())
        <div class="alert alert-warning">No places found under "{{ $category }}" category.</div>
    @else
        <div class="row">
            @foreach($places as $item)
                <div class="col-md-4 mb-4">
                    <a href="{{ route('place.details', $item->id) }}" class="text-decoration-none text-dark">
                        <div class="card h-100 shadow-sm" id="card-zoom-effect">
                            <img src="{{ asset('uploads/' . $item->image) }}"
                                 class="card-img-top"
                                 alt="{{ $item->placeName }}"
                                 style="height: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $item->placeName }}</h5>
                                <p class="card-text text-truncate" style="max-height: 4.8em;">
                                    {{ $item->placesShortdes }}
                                </p>
                                <p class="mt-auto"><strong>Location:</strong> {{ $item->placeLocation }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
