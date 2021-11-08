<?php

// 20 <=  temp < 30 => warm weather
// 30 <= temp => hot weather
// 20 > temp >= 10 => cold weather
// 10 > temp > 0 => very cold weather
// temp < 0 => snow weather
$temp = 0;
if($temp < 0){
    $message = "Snow Weather";
}elseif($temp >= 0 AND $temp < 10){
    $message = "very Cold Weather";
}elseif($temp >= 10 AND $temp < 20){
    $message = "Cold Weather";
}elseif($temp >= 20 AND $temp < 30){
    $message = "Warm Weather";
}else{
    $message = "Hot Weather";
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
          <div class="mt-5 row">
              <div class="col-4 offset-4">
                    <div class="alert alert-success">
                        <h1 class="alert-heading text-center"> Weather </h1>
                        <ul>
                            <li>
                                Temp : <?= $temp; ?>
                            </li>
                            <li>
                                Message : <?= $message; ?>
                            </li>
                        </ul>
                    </div>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>