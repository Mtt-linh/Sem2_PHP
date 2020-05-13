<?php
// array php : k gioi han so luong phan tu. ging js
//array php : ket hop giua array JS va Hasmap Java
$ary = [];//khai bao mang ary
$ary[0]=10;
$ary[1]="linhlinh";
$ary[]=3.14;// tu dong nap vao vi tri index tiep theo
for ($i = 0 ; $i<count($ary);$i++){
    echo $ary[$i];
}

foreach ($ary as $e){ //array as element -- nguoc voi java - c#
    echo $e;
}
$ary["point"]= 100;//point la nhanx cua 1 gia tri
var_dump($ary);//in ra ca cot gia tri // Console.log();
$arr = [];
$arr[]=1;
$arr[]= $ary;
$arr = "say hello";

$student = [
    "name"=>"Mai Linh",
    "Age"=>19,
    "id"=>1
];// mang kieu hashmap -> hay dung de dinh nghia du lieu cho 1 phan tu
$student["point "]= 10 ;
var_dump($student);
//if($student["point"]>5){
//    echo $student["name"];
//}else{
//    echo " khong co sinh vien";
//}
// dih nghia 1 ham - giong het javascript
alert();
sendMessage();
sendMessage(" hello word ");
function alert(){
    echo " thong bao khan cap ";

}
function sendMessage($msg = " hahaha"){// tham so co the napgia tri mac dinh ban dau
echo  $msg;
}
// thong dich ( run time) xong file nay chuyen ket quathanh ma html
