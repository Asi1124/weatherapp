<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../public/index.css">
    <title>Document</title>
</head>
<body>
<div id="weather_wrapper">
    <div class="weatherCard">
        <div class="currentTemp">
            <span class="temp">{{round($temp['main']['temp'])}}&deg;</span>
            <span class="location">{{$details->getCity()}}</span>
        </div>
        <div class="currentWeather">
            <span class="conditions">&#xf00d;</span>
            <div class="info">
                <span class="rain">{{$temp['main']['humidity']}} %</span>
                <span class="wind">{{$temp['wind']['speed']}} M/S</span>
            </div>
        </div>
    </div>
</div>

</body>
</html>
