<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orų prognozė</title>
</head>
<body>
    @if(isset($weather))
    <h2>forecastTimeUtc-{{$weather->forecastTimeUtc}}</h2>
    <h2>airTemperature-{{$weather->airTemperature}}</h2>
    <h2>windSpeed-{{$weather->windSpeed}}</h2>
    <h2>windGust-{{$weather->windGust}}</h2>
    <h2>windDirection-{{$weather->windDirection}}</h2>
    <h2>cloudCover-{{$weather->cloudCover}}</h2>
    <h2>seaLevelPressure-{{$weather->seaLevelPressure}}</h2>
    <h2>relativeHumidity-{{$weather->relativeHumidity}}</h2>
    <h2>totalPrecipitation-{{$weather->totalPrecipitation}}</h2>

@endif
</body>
</html>