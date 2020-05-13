<?php
function connect()
{
    $host = "localhost";
    $userDB = "root";
    $passDb = "";
    $dbName = "t1907m_sem2";
    $conn = new mysqli($host, $userDB, $passDb, $dbName);//khong cna post
    if ($conn->connect_error) {
        die("connect fail");// die la ham dung luong dang chay ,php la ham ngon ngu don luong ( single thread)
    }
    return $conn;
}

function getAll($table)
{
    $conn = connect();
    $sql_text = "SELECT*FROM" . $table;
    $rs = $conn->query($sql_text);
    //var_dump($result);
    $data = [];
    if ($rs->num_rows > 0) {
        while ($row = $rs->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}


function toArray($rs)
{
    $data = [];
    if ($rs->num_rows > 0) {
        while ($row = $rs->fetch_assoc()) {
            $data[] = $row;
            //mỗi row mà 1 mảng có các key là các column
        }
        return $data;
        //var_dump($students);
    }
    //students là mang chứa các sinh viên
    return $data;
}