<?php
$title = "Home";
include_once "layouts/header.php";
include_once "middleware/auth.php";

include_once "layouts/nav.php";
?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h1 class="h1 text-danger"> Products </h1>
        </div>
        <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="images/products/mac.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Laptop</h4>
                    <p class="card-text">25000</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="images/products/iphone13.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Mobile</h4>
                    <p class="card-text">5000</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="images/products/samsung.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">TV</h4>
                    <p class="card-text">10000</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once "layouts/footer.php";
?>