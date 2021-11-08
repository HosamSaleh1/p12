<?php

// event if the form has been submitted
if ($_POST) {
    $product = $_POST['product'];
    if ($product == 'laptop') {
        $price = 20000;
        $percentage =  0.1;
    } elseif ($product == 'mobile') {
        $percentage =  0.2;
        $price = 15000;
    } elseif ($product == 'accessories') {
        $percentage =  0.05;
        $price = 1000;
    } else {
        $percentage =  0;
        $price = 200;
    }
    $discount = $price * $percentage;
    $priceAfterDiscount = $price - $discount;
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
        <div class="row mt-5">
            <div class="col-4 offset-4">
                <div class="card ">
                    <div class="card-header text-center">
                        <h4> Choose Your Product</h1>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <label for="product">Product</label>
                            <select name="product" id="product" class="form-control">
                                <option value="laptop">Laptop</option>
                                <option value="mobile">Mobile</option>
                                <option value="accessories">Accessories</option>
                                <option value="something">Something Else</option>
                            </select>
                            <br>
                            <button class="btn btn-success" name="submit"> Buy Now !</button>
                        </form>
                        <?php
                        // if ($_POST) {
                        // $message = "<div class='alert alert-success'>
                        //                 <h1 class='alert-heading text-center'> Bill </h1>
                        //                 <ul>
                        //                     <li>
                        //                         Product : $product>
                        //                     </li>
                        //                     <li>
                        //                         Price : $price <b> EGP </b>
                        //                     </li>
                        //                     <li>
                        //                         Percentage : $percentage * 100 % 
                        //                     </li>
                        //                     <li>
                        //                         Discount :  $discount <b> EGP </b>
                        //                     </li>
                        //                     <li>
                        //                         Price After Discount : $priceAfterDiscount <b> EGP </b>
                        //                     </li>
                        //                 </ul>
                        //             </div>";
                        // echo $message;
                        // }
                        ?>

                        <?php
                        if ($_POST) {
                        ?>
                            <!-- <div class="alert alert-success">
                                <h1 class="alert-heading text-center"> Bill </h1>
                                <ul>
                                    <li>
                                        Product : <?php //echo $product; 
                                                    ?>
                                    </li>
                                    <li>
                                        Price : <?php //echo $price . '<b> EGP </b>'; 
                                                ?>
                                    </li>
                                    <li>
                                        Percentage : <?php // echo $percentage * 100 . '% '; 
                                                        ?>
                                    </li>
                                    <li>
                                        Discount : <?php // echo $discount . '<b> EGP </b>'; 
                                                    ?>
                                    </li>
                                    <li>
                                        Price After Discount : <?php // echo $priceAfterDiscount . '<b> EGP </b>'; 
                                                                ?>
                                    </li>
                                </ul>
                            </div> -->
                        <?php
                        }
                        ?>

                        <!-- <div class="alert alert-success">
                            <h1 class="alert-heading text-center"> Bill </h1>
                            <ul> -->
                        <?php
                        if ($_POST) {
                        ?>
                            <!-- <li>
                                        Product : <?php // echo $product; 
                                                    ?>
                                    </li>
                                    <li>
                                        Price : <?php // echo $price . '<b> EGP </b>'; 
                                                ?>
                                    </li>
                                    <li>
                                        Percentage : <?php // echo $percentage * 100 . '% '; 
                                                        ?>
                                    </li>
                                    <li>
                                        Discount : <?php // echo  $discount . '<b> EGP </b>'; 
                                                    ?>
                                    </li>
                                    <li>
                                        Price After Discount : <?php // echo  $priceAfterDiscount . '<b> EGP </b>'; 
                                                                ?>
                                    </li> -->
                        <?php
                        }
                        ?>
                        <!-- </ul>
                        </div> -->
                        <div class="alert alert-success">
                            <h1 class="alert-heading text-center"> Bill </h1>
                            <ul>
                                <li>
                                    Product : <?= isset($product) ? $product : '' ?>
                                </li>
                                <li>
                                    Price : <?php if(isset($price)){ echo $price . '<b> EGP </b>'; } ?>
                                </li>
                                <li>
                                    Percentage : <?= isset($percentage) ? $percentage * 100 . '% ' : ''; ?>
                                </li>
                                <li>
                                    Discount : <?php if(isset($discount)){ echo  $discount . '<b> EGP </b>'; } ?>
                                </li>
                                <li>
                                    Price After Discount : <?= isset($priceAfterDiscount) ?  $priceAfterDiscount . '<b> EGP </b>' : ''; ?>
                                </li>
                            </ul>
                        </div>

                    </div>
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