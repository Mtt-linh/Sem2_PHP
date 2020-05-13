<?php
//$student =[];
//$students[]= [
//    "name"=>"Mai Linh",
//    "Age"=>19,
//    "id"=>1
//];
//$students[] = [
//    "name"=>"Van anh",
//    "Age"=>19,
//    "id"=>2
//];
//$students[] = [
//    "name"=>"hoang ha ",
//    "Age"=>19,
//    "id"=>3
//];
//$students[]= [
//    "name"=>"nguyen nhan",
//    "Age"=>19,
//    "id"=>4
//
//];
$json_srr = file_get_contents("Data/student.json");
$Student = json_decode($json_srr);//mang cac doi tuong stdclass