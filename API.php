<?php
if ( isset( $_POST['city'] ) ) { 
    $cityId = $_POST['city']; 
    $apikey = "078219c4085dd3ca71b5f7a7e71bd6fe";
    $url = "http://api.openweathermap.org/data/2.5/weather?id=".$cityId."&lang=en&units=metric&APPID=".$apikey."";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
    $result = curl_exec($ch);
    curl_close($ch);  }
?>
