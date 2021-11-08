<?php

// laptops = 10% discount
// mobiles = 20 %
// accessories = 5 %;
// else no discount

$product = 'laptop';
$price = 20000;
// $product = 'mobile';
// $price = 15000;
// $product = 'accessories';
// $price = 1000;
// $product = 't-shirt';
// $price = 50;

if($product == 'laptop'){
    $percentage =  0.1;
}elseif($product == 'mobile'){
    $percentage =  0.2;
}elseif($product == 'accessories'){
    $percentage =  0.05;
}else{
    $percentage =  0;
}
$discount = $price * $percentage;
$priceAfterDiscount = $price - $discount;

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
                        <h1 class="alert-heading text-center"> Bill </h1>
                        <ul>
                            <li>
                                Product : <?php echo $product; ?>
                            </li>
                            <li>
                                Price : <?php echo $price . '<b> EGP </b>'; ?>
                            </li>
                            <li>
                                Percentage : <?= $percentage * 100 . '% '; ?>
                            </li>
                            <li>
                                Discount : <?= $discount . '<b> EGP </b>'; ?>
                            </li>
                            <li>
                                Price After Discount : <?= $priceAfterDiscount . '<b> EGP </b>'; ?>
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
