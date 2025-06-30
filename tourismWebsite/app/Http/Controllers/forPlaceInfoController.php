<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Placesinfo;

class forPlaceInfoController extends Controller
{
    //
    public function show($id)
    {
        $placeinfos = PlacesInfo::findOrFail($id);
        $recommended = PlacesInfo::where('id', '!=', $id)
                    ->latest('id')
                    ->take(3)
                    ->get(['id', 'placeName', 'placeShortdes', 'image', 'placeLocation']);
        return view('placeInfo', compact('placeinfos', 'recommended'));
    }
}
