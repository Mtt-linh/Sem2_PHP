<?php
require_once "students.php";
if(!empty($_GET["id"])):
    $user = new Assignment\Assignment2\Student.php;
    $user = $user->find($_GET["id"]);
    $user->delete();
    header("Location: students.php");
endif;
