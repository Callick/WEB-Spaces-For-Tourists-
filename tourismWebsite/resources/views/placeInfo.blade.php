@extends('layouts.master')
@section('title', 'Tourism Porto | Place Details')

@section('content')
        <div class="container-fluid tm-mt-60">
            <div class="row tm-mb-50">

                    <div class="col-lg-8 col-12 mb-5">
                        <h2 class="tm-text-primary mb-5">{{ $placeinfos->placeName }} </h2>
                        <p class="mt-auto text-end" id="placeLoc"><i class="fa-solid fa-map-location-dot"></i> {{ $placeinfos->placeLocation }}</p>
                        <p class="text-uppercase">{{ $placeinfos->placeShortdes }} <a href="{{ route('places.byCategory', ['category' => $placeinfos->categoryName]) }}"><span class="badge bg-info text-dark">{{$placeinfos->categoryName}}</span> </a> </p>
                        <img src="{{ asset('uploads/' . $placeinfos->image) }}" class="rounded mx-auto d-block" alt="{{ $placeinfos->placeName }}"
                            style="width: 100%; height: auto; max-height: 400px; object-fit: cover;"><br>
                        <p class="text-uppercase">{{ $placeinfos->placeDescription }}</p>
                    </div>

                    <div class="col-lg-4 col-12 text-center">
                        <h2 class="tm-text-primary mb-5">Get Direction</h2>
                        <!-- Map -->
                        <div class="mapouter mb-4">
                            <div class="gmap-canvas">
                                <iframe width="90%" height="480" id="gmap-canvas"
                                    src="{{ $placeinfos->placeMapURL }}"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                        @if($weather)
                            <div class="card mt-4 shadow-sm">
                                <h5 class="card-header text-center">Current Weather in {{ $placeinfos->placeLocation }}</h5>
                                <div class="card-body d-flex align-items-center">
                                    <img src="http://openweathermap.org/img/wn/{{ $weather['icon'] }}@2x.png" alt="Weather Icon">
                                    <div>
                                        <p><b>{{ ucfirst($weather['description']) }}</b></p>
                                        <p>🌡️ Temperature: {{ $weather['temperature'] }} °C</p>
                                        <p>💨 Wind: {{ $weather['wind_speed'] }} km/s</p>
                                        <p>💧 Humidity: {{ $weather['humidity'] }}%</p>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="alert alert-warning mt-4">
                                Weather data is not available at the moment.
                            </div>
                        @endif              
                    </div>
                
            </div>
            <div class="row tm-mb-50">
                <div class="row mb-4">
                    <h2 class="col-6 tm-text-primary">
                        Recommend To Visit
                    </h2>
                </div>
        <div class="row">
            @foreach($recommended as $rec)
                <div class="col-sm-4 mb-4 d-flex align-items-stretch">
                    <div class="card w-100 h-100 shadow-sm" id="card-zoom-effect">
                        <a href="{{ route('place.details', $rec->id) }}" style="text-decoration: none; color: inherit; width: 100%;">
                            <img src="{{ asset('uploads/' . $rec->image) }}"
                                class="card-img-top object-fit-cover"
                                alt="{{ $rec->placeName }}"
                                style="height: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $rec->placeName }}</h5>
                                <p class="card-text text-truncate" style="max-height: 4.8em; overflow: hidden;">
                                    {{ $rec->placeShortdes }}
                                </p>
                                <p class="mt-auto" id="placeLoc"><i class="fa-solid fa-map-location-dot"></i> {{ $rec->placeLocation }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        </div> <!-- container-fluid, tm-container-content -->
@endsection
