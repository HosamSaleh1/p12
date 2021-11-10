<?php
// print_r($_POST);die;
// if(isset($_POST['register'])){
//     echo "register";
// }elseif(isset($_POST['login'])){
//     echo "login";
// }else{
//     echo "404";
// }

if($_POST['button'] == 'login'){
    echo "login";
}elseif($_POST['button'] == 'register'){
    echo "register";
}else{
    echo "404";
}