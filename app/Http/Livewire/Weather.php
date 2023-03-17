<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Weather extends Component
{
    public $city;
    public $country;
    public $weather;
    public $windSpeed;
    public function getWeather()
    {
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$this->city},{$this->country}&units=metric&appid=a7e9c5d24e5e35e097bad60b1be501ee");
        $data = $response->json();
        $windSpeed = $data['wind']['speed'] * 3.6; // Convert wind speed from m/s to km/h
        $this->weather = [
            'city' => $data['name'],
            'country' => $data['sys']['country'],
            'temperature' => round($data['main']['temp']),
            'humidity' => $data['main']['humidity'],
            'conditions' => $data['weather'][0]['description'],
            'wind_speed' => round($windSpeed),
            'icon' => $data['weather'][0]['icon'],
            'day' => Carbon::today()->format('l'),
            'date' => Carbon::today()->format('d/m/Y'),
        ];
        $this->reset(['city']);
    }
    public function render()
    {
        return view('livewire.weather');
    }

}
