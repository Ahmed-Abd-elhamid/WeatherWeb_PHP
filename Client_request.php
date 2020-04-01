<html>
    <head>
        <meta charset="UTF-8">
        <title>Weather</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    </head>
    <body>

  <form method="POST" action="Server_response.php">
    <select name="city" class="form-control bg-dark text-light" id="exampleFormControlSelect1">
      <?php
      ini_set('memory_limit', '-1');
      $json1 = file_get_contents('resources/city.list.json');
      $arr = json_decode($json1, true);
      foreach($arr as $val){
        if ($val['country'] == "EG"){
          $cities[] = $val;        
        }
      }

      foreach($cities as $val){
          echo "<option value= '".$val['id']."'>".$val['name']."</option>";  
      }
      ?>
    </select>
  <button type="submit" class="btn btn-secondary float-right">Select</button>
  </form>

    </body>
</html>
