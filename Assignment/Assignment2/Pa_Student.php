<?php
if(count($_POST) > 0):
    require_once "Student.php";
//nhan thong tin tu form
    $name = $_POST['name'];
    $age = $_POST['age'];
    $mark = $_POST['mark'];

    //insert to table
    $user = new Assignment\Assignment2\Student(null, $name, $age, $mark);
    $user->save();
    header("Location: students.php");

endif;