<?php
if (count($_POST) > 0):
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd=$_POST['password'];
    // insert to table
$user = new \Correct_Assignment1\USERs(null,$name,$email,$pwd);
$user->save();
header("location :user.php");// điều hướng trở lại trang danh sách
endif;