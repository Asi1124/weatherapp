<?php

namespace App\Http\Controllers;

use Request;

class WeatherController extends Controller
{
    public function weatherApp()
    {
        $details = $this->ip();
        $temp = $this->temp($details->getLatitude(),$details->getLongitude());
        return view('index',compact('details','temp'));

    }


    //получаем температуру с помощью стороннего API и Guzzle
    private function temp (string $lat,string $lon)
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://api.openweathermap.org/data/2.5/weather?lat='.$lat.'&lon='.$lon.'&exclude=current&units=metric&appid={API}');
        $temp = json_decode($res->getBody(), true);
        return $temp;
    }

    private function ip()
    {
        $details = \Adrianorosa\GeoLocation\GeoLocation::lookup();
        return $details;
    }
    //
}
