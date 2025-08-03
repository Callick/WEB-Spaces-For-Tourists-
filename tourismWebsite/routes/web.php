<?php

use Illuminate\Support\Facades\Route;
use App\Models\Placesinfo;
use App\Http\Controllers\forPlaceInfoController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    // Fetching places from the database based on categories 'Historical' and 'To-Do'
    $historicalPlaces = Placesinfo::where('categoryName', 'Historical')
    ->latest('created_at')
    ->take(3)
    ->get(['id', 'placeName', 'placeShortdes', 'image', 'placeLocation']);

    $todoPlaces = Placesinfo::where('categoryName', 'To-Do')
    ->latest('created_at')
    ->take(3)
    ->get(['id', 'placeName', 'placeShortdes', 'image', 'placeLocation']);

    $restaurantPlaces = Placesinfo::where('categoryName', 'Restaurant')
    ->latest('created_at')
    ->take(3)
    ->get(['id', 'placeName', 'placeShortdes', 'image', 'placeLocation']);

    return view('tourismHome', compact('historicalPlaces', 'todoPlaces', 'restaurantPlaces'));
});
// Route to show details of a specific place
Route::get('/placeDetails/{id}', [forPlaceInfoController::class, 'show'])->name('place.details');

// Route to show places following search query
Route::get('/search', [forPlaceInfoController::class, 'search'])->name('place.search');

// Route to view places by category
Route::get('/places/category/{category}', [forPlaceInfoController::class, 'viewByCategory'])->name('places.byCategory');

Route::get('/user-dashboard', function () {
    return view('profile');
})->middleware('auth');

// route for admin access
Route::get('/admin-access', function () {
    // If user is NOT logged in, redirect directly to OpenAdmin login
    if (!Auth::check()) {
        return redirect('/admin/auth/login');
    }

    // If user is admin (based on email)
    if (Auth::user()->email === env('ADMIN_EMAIL')) {
        return redirect('/admin');
    }

    // For normal users
    return redirect('/user-dashboard'); // Or any route you defined
});