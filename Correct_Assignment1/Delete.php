<?php
require_once "User.php";
if(!empty($_GET["id"])):
    $user = new Correct_Assignment1\user();
    $user = $user->find($_GET["id"]);
    $user->delete();
    header("Location: user.php");// dieu huong tro lai trang danh sach
endif;