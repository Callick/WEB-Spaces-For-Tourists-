<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{
    public function getWeather($city)
    {
        $apiKey = config('services.openweather.key');

        // API endpoint
        $url = "https://api.openweathermap.org/data/2.5/weather";

        // Send GET request to the OpenWeather API
        $response = Http::get($url, [
            'q'     => $city,
            'appid' => $apiKey,
            'units' => 'metric' // Celsius
        ]);

        // If request fails, return null
        if ($response->failed()) {
            return null;
        }

        // Return only the needed weather data
        return [
            'temperature' => round($response['main']['temp']),// Round temperature to nearest integer
            //default wind speed unit m/s 'wind_speed'  => $response['wind']['speed'],
            'wind_speed'  => round($response['wind']['speed'] * 3.6, 2), // Convert to km/h take upto 2 decimal places
            'description' => $response['weather'][0]['description'],
            'icon'        => $response['weather'][0]['icon'], // For graphic
            'humidity'    => $response['main']['humidity'],
        ];
    }
}
