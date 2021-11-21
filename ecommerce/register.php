<?php
$title = "Register";
include_once "layouts/header.php";
include_once "layouts/nav.php";
include_once "layouts/breadcrumb.php";
include_once "app/requests/RegisterRequest.php";
if($_POST){
   // validation
   // ips => email [required,regex] , password [required,regex,password = confrim password]
    $validaiton = new RegisterRequest;
    $validaiton->setEmail($_POST['email']);
    $emailValidationResult = $validaiton->emailValidation();

    $validaiton->setPassword($_POST['password']);
    $validaiton->setConfirmPassword($_POST['confirm_password']);
    $passwordValidationResult = $validaiton->passwordValidation();

    if(empty($emailValidationResult) AND empty($passwordValidationResult)){
        // generate code => 12345
        $code = rand(10000,99999);
        // insert user into database
        // send mail => with code
        // open new page => check-code.php
    }
   
}
?>

<!-- Breadcrumb Area End -->
<div class="login-register-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg2">
                            <h4> register </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg2" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form  method="post">
                                        <input type="text" name="first_name" placeholder="first name" value="<?php if(isset($_POST['first_name'])){echo $_POST['first_name'];} ?>">
                                        <input type="text" name="last_name" placeholder="last name" value="<?php if(isset($_POST['last_name'])){echo $_POST['last_name'];} ?>">
                                        <input type="email" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>">
                                        <?php 
                                            if(!empty($emailValidationResult)){
                                                foreach ($emailValidationResult as $key => $value) {
                                                    echo $value;
                                                }
                                            }
                                        ?>
                                        <input type="tel" name="phone" placeholder="Phone" value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];} ?>">
                                        <input type="password" name="password" placeholder="password">
                                        <?php 
                                            if(isset($passwordValidationResult['password-required'])){
                                               echo $passwordValidationResult['password-required'];
                                            }
                                            if(isset($passwordValidationResult['password-regex'])){
                                                echo $passwordValidationResult['password-regex'];
                                             }
                                        ?>
                                        <input type="password" name="confirm_password" placeholder="Confrim password">
                                        <?php 
                                            if(isset($passwordValidationResult['password-confirm'])){
                                               echo $passwordValidationResult['password-confirm'];
                                            }
                                            if(isset($passwordValidationResult['confirm_password-required'])){
                                                echo $passwordValidationResult['confirm_password-required'];
                                             }
                                        ?>
                                        <select name="gender" class="form-control" id="" >
                                            <option <?php if(isset($_POST['gender']) AND $_POST['gender'] == 'f'){echo "selected";} ?> value="f">Female</option>
                                            <option <?= (isset($_POST['gender']) && $_POST['gender'] == 'm') ? 'selected' : '' ?> value="m">Male</option>
                                        </select>
                                        <div class="button-box mt-4">
                                            <button type="submit"><span>Register</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once "layouts/footer.php";
?>