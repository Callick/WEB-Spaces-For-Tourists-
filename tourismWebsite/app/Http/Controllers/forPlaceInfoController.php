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
    // perform search based on user input
    public function search(Request $request)
    {
        $query = trim($request->input('query'));

        // Check if the query is empty after trimming
        if ($query === '') {
            return redirect()->back()->with('error', 'Please enter a search term.');
        }

        $results = PlacesInfo::where('placeName', 'LIKE', "%{$query}%")
            ->orWhere('placeShortdes', 'LIKE', "%{$query}%")
            ->orWhere('placeLocation', 'LIKE', "%{$query}%")
            ->get();

        if ($results->count() === 0) {
            $suggested = PlacesInfo::inRandomOrder()->take(3)->get();
            return view('searchResults', [
                'query' => $query,
                'notFound' => true,
                'suggested' => $suggested
            ]);
        }

        return view('searchResults', [
            'query' => $query,
            'notFound' => false,
            'results' => $results
        ]);
    }
    // view places by category
    public function viewByCategory($category)
    {
        // Fetch all places that match the category
        $places = PlacesInfo::where('categoryName', $category)->get();

        return view('categoryList', [
            'category' => $category,
            'places' => $places,
        ]);
    }


}
