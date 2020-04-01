<?php require "API.php"; ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Weather</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>
    <body>
<?php
  if (isset($result)){

  $arr = json_decode($result, true);
  $coord = $arr['coord'];
  $weather = $arr['weather'][0];
  $base = $arr['main'];
  $wind = $arr['wind'];
  $name = $arr['name'];

  echo "<h2 class ='text-center border border-dark bg-secondary text-white'><b>".$name. "  <i class='fas fa-temperature-high'></i></b></h2>";
  echo "<hr>";
  echo "<table class='table table-striped table-dark'>";
  echo "<tr>";
  echo "<th colspan='2'>Location</th>";
  echo "<td>".$coord['lon']."</td>";
  echo "<td>".$coord['lat']."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th colspan='2'>Weather</th>";
  echo "<td>".$weather['main']."</td>";
  echo "<td>".$weather['description']."</td>";
  echo "</tr>";
  echo "<tr>";
  echo "<th colspan='2'>Temperature</th>";
  echo "<td>".$base['temp']." C</td>";
  echo "<td>".$base['feels_like']." C</td>";
  echo "</tr>";
  echo "<th colspan='2'>Pressure</th>";
  echo "<td>".$base['pressure']."</td>";
  echo "<td></td>";
  echo "</tr>";
  echo "</tr>";
  echo "<th colspan='2'>Humidity</th>";
  echo "<td>".$base['humidity']."%</td>";
  echo "<td></td>";
  echo "</tr>";
  echo "</tr>";
  echo "<th colspan='2'>Wind</th>";
  echo "<td>".$wind['speed']."km/h</td>";
  echo "<td></td>";
  echo "</tr>";
  echo "</table>";
}
?>
    </body>
  </html>