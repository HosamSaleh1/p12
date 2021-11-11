<?php

$title = "Login";
include_once "layouts/header.php";
include_once "middleware/guest.php";

$users = [
    [
        'id' => 1,
        'name' => 'ahmed',
        "email" => 'ahmed@gmail.com',
        "password" => 123456,
        'image' => '1.jpg',
        'gender' => 'm'

    ],
    [
        'id' => 2,
        'name' => 'mohamed',
        "email" => 'mohamed@gmail.com',
        "password" => 123456,
        'image' => '2.jpg',
        'gender' => 'm'

    ],
    [
        'id' => 3,
        'name' => 'menna',
        "email" => 'menna@gmail.com',
        "password" => 123456,
        'image' => '3.jpg',
        'gender' => 'f'
    ]
];

if ($_POST) {
    // validation => required
    $errors = [];
    if (empty($_POST['email'])) {
        $errors['email'] = "<div class='alert alert-danger'> Email Is Required </div>";
    }
    if (empty($_POST['password'])) {
        $errors['password'] = "<div class='alert alert-danger'> Password Is Required </div>";
    }

    // array_filter
    // email => post
    // password => post
    // successfull login => $_POST[email , password] == $user[email , password]
    // faild login => message => Faild attempt 
    if(empty($errors)){
        foreach ($users as $index => $user) {
            if($user['email'] == $_POST['email'] AND $user['password'] == $_POST['password']){

                $_SESSION['user'] = $user;
                header('location:home.php');die;
            }else{
                $errors['wrong'] = "<div class='alert alert-danger'> Faild Attempt </div>";
            }
        }
    }
   

}

include_once "layouts/nav.php";


?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h1 class="h1 text-danger"> Login </h1>
        </div>
        <div class="col-6 offset-3">
            <form method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId" value="<?php if (isset($_POST['email'])) {                                                                                                           } ?>">
                    <?php
                    if (isset($errors['email'])) {
                        echo  $errors['email'];
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
                    <?php
                    if (isset($errors['password'])) {
                        echo  $errors['password'];
                    }
                    if (isset($errors['wrong'])) {
                        echo  $errors['wrong'];
                    }
                    ?>
                </div>
                <div class="form-group">

                    <button class="btn btn-danger"> Login </button>
                </div>

            </form>
        </div>
    </div>
</div>
<?php
include_once "layouts/footer.php";
?>