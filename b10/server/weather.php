<?php
    require '../api/api.php';
    $nameCity = $_POST['name'] ?? '';//lay ra gia tri
    $infoData = getDataWeatherByCity($nameCity);
    $infoWeather =[];

    if(isset($infoData['list'])){
        $infoWeather = $infoData['list'];
    }
    require '../view/list_weather.php';

