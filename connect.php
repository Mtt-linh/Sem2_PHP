<?php
$host = "localhost";
$userDB = "root";
$passDb = "";
$dbName = "t1907m_sem2";
$conn = new mysqli($host, $userDB, $passDb, $dbName);//khong cna post
if ($conn->connect_errno) {
    die("connect fail");// die la ham dung luong dang chay ,php la ham ngon ngu don luong ( single thread)
}
function getAll($table)
{
    $conn = connect();
    $sql_text = "SELECT*FROM" . $table;
    $result = $conn->query($sql_text);
    //var_dump($result);
    $data = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}


function toArray($result){
    $data = [];
    if($result -> num_rows > 0){
        while ($row = $result -> fetch_assoc()){
            $data[] = $row;
            //mỗi row mà 1 mảng có các key là các column
        }
        //var_dump($students);
    }
    //students là mang chứa các sinh viên
    return $data;
}