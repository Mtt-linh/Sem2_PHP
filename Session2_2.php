<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>LONG GHEP PHP - HTML</title>
</head>
<body>
<h1>thong tin sinh vien </h1>
<?php
include_once ("Session2_3.php")// nap file php vao mot file khac

?>
<?php
// day la noi viet code php
// ben ngoai pham vi nay la code html
$student =[];
    $students[]= [
    "name"=>"Mai Linh",
    "Age"=>19,
    "id"=>1
];
$students[] = [
    "name"=>"Van anh",
    "Age"=>19,
    "id"=>2
];
$students[] = [
    "name"=>"hoang ha ",
    "Age"=>19,
    "id"=>3
];
$students[]= [
    "name"=>"nguyen nhan",
    "Age"=>19,
    "id"=>4

];
?>
<?php
foreach ($students as $s):?>
<ul>
    <a><a href="#"<?php echo $s->name ;?>ten</a></li>
    <li><?php echo $s->Age ;?>tuoi</li>// goi thuoc tinh tuoi
    <li><?php echo $s->id; ?>id</li>
</ul>
<?php endforeach;// lam the nay de khoi lan voi dau {} cua bon khac nhu if else.... ?>
</body>
</html>