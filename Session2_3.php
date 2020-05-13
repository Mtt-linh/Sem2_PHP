<?php // lay du lieu tu mysql vao php
$host = "localhost";
$userDB = "root";
$passDb = "";
$dbName = "t1907m_sem2";
$conn = new mysqli($host, $userDB, $passDb, $dbName);//khong cna post
if ($conn->connect_errno) {
    die("connect fail");// die la ham dung luong dang chay ,php la ham ngon ngu don luong ( single thread)
}
// ra day duoc co nghia la ket noi thanh cong
//echo "connected successfully";
$sql_text = " SELECT * FROM student";
$rs = $conn->query($sql_text);
//var_dump($rs);
$student = [];
if ($rs->num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
        $student[] = $row;
//moi row la mot mang co cac key la cac colum

    }
    var_dump($student);
    // student la mang chua cac sinh vien
}
?>
<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach sinh vien tu csdl </title>
</head>
<body>
<?php foreach ($student as $s):?>
<ul>
    <li><?php echo $s["ID"];?></li>
    <li><?php echo $s["Name"];?></li>
    <li><?php echo $s["Age"];?></li>
    <li><?php echo $s["Mark"];?></li>
</ul>
<?php endforeach; ?>
</body>
</html>



