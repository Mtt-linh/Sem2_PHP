<?php
header('content-Type : text/html ;charset=utf-8');
$host = "localhost";
$userDB = "root";
$passDb = "";
$dbName = "t1907m_sem2";
$conn = new mysqli($host, $userDB, $passDb, $dbName) or die (' loi ket noi');
if (isset($_POST['dangky'])) {
    $userName = isset($_POST['UserName']) ? mysqli_escape_string($_POST['UserName']) : '';
    $password = isset($_POST['Password']) ? mysqli_escape_string($_POST['Password']) : '';
    $Phone = isset($_POST['Phone']) ? mysqli_escape_string($_POST['Phone']) : '';
    $Mail = isset($_POST['Mail']) ? mysqli_escape_string($_POST['Mail']) : '';
    $sql = "SELECT * FROM member WHERE UserName = '$userName'OR Mail = '$Mail'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="Registration.php";</script>';
        die();
    } else {
        $sql = "INSERT INTO member (userName, password,  phone, Mail) VALUES ('$userName','$password','$Phone','$Mail')";
if (mysqli_query($conn,$sql)){
    echo " Ten dang nhap : "/$_POST['UserName']."<br/>";
    echo " mat khau  : "/$_POST['Password']."<br/>";
    echo " so dien thoai : "/$_POST['Phone']."<br/>";
    echo "Mail dang nhap : "/$_POST['Mail']."<br/>";
    echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="Registration.php";</script>';


}
    }
}
?>
