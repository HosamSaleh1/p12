<?php

$title = "Profile";
include_once "layouts/header.php"; // start session
include_once "middleware/auth.php";

// update // ahmed
if($_POST){
    // validation => required
    // print_r($_FILES);die;
    $errors = [];
    if (empty($_POST['email'])) {
        $errors['email'] = "<div class='alert alert-danger'> Email Is Required </div>";
    }
    if (empty($_POST['name'])) {
        $errors['name'] = "<div class='alert alert-danger'> Name Is Required </div>";
    }
    if (empty($_POST['gender'])) {
        $errors['gender'] = "<div class='alert alert-danger'> Gender Is Required </div>";
    }

    if(empty($errors)){
        if($_FILES['image']['error'] == 0){
            // size
            $maxUploadSize = 10**6; // 10000000 bytes
            $maxUploadSizeMega = $maxUploadSize/1000000; // 1 mega
            if($_FILES['image']['size'] > $maxUploadSize){
                $errors['image']['size'] = "<div class='alert alert-danger'> Size Must Be Less Than $maxUploadSizeMega Mega </div>";
            }
            // extensions
            $allowedExtensions = ['png','jpg','jpeg'];
            $photoExtension = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION); // png
            if(!in_array($photoExtension,$allowedExtensions)){
                $errors['image']['ext'] = "<div class='alert alert-danger'> Allowed Extensions are ".implode(",",$allowedExtensions)." </div>";
            }

            if(empty($errors['image'])){
                $dir = "images/users/";
                $photoName = time() .$_SESSION['user']['id'] . '.' . $photoExtension; //16533513524.png
                $photoPath = $dir . $photoName; // images/users/1653351352.png
                move_uploaded_file($_FILES['image']['tmp_name'],$photoPath);
                $_SESSION['user']['image'] = $photoName;
            }

        }
        // update
        // condition
        if(empty($errors['image'])){
            $_SESSION['user']['name'] = $_POST['name'];
            $_SESSION['user']['email'] = $_POST['email'];
            $_SESSION['user']['gender'] = $_POST['gender'];
            $success = "<div class='alert alert-success'> Data Updated Sucessfully </div>";
        }
        
    }

}
include_once "layouts/nav.php"; // get data from session // galal

?>

<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h1 class="h1 text-dark"> Profile </h1>
            <?= isset($success) ? $success : '' ?>
        </div>
        <div class="col-6 offset-3">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-row">
                   <div class="col-4 offset-4">
                    <img src="images/users/<?= $_SESSION['user']['image'] ?>" alt="" class="w-100 rounded-circle">
                    <input type="file" name="image" class="form-control" >
                   
                   </div>
                </div>
                <div class="form-group">
                    <?php 
                        if(isset($errors['image'])){
                            foreach ($errors['image'] as $key => $value) {
                                echo $value;
                            }
                        }
                    ?>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?= $_SESSION['user']['name'] ?>">
                    <?php
                    if (isset($errors['name'])) {
                        echo  $errors['name'];
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?= $_SESSION['user']['email'] ?>" required>
                    <?php
                    if (isset($errors['email'])) {
                        echo  $errors['email'];
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-control" >
                        <option <?php if($_SESSION['user']['gender'] == 'm'){echo "selected";} ?> value="m">Male</option>
                        <option <?= $_SESSION['user']['gender'] == 'f' ? 'selected' : '' ?> value="f">Female</option>
                    </select>
                    <?php
                    if (isset($errors['gender'])) {
                        echo  $errors['gender'];
                    }
                    ?>
                </div>
                <div class="form-row">
                    <div class="col-2 offset-5">
                        <button class="btn btn-dark d-block"> Update </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once "layouts/footer.php";
?>