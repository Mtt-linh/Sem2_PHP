
<?php require_once "USERs.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Danhsach nguoi dung</title>
</head>
<body>
<h1>Danh sách người dùng </h1>
    
<div class="container">
    <h1 style="text-align: center; margin-top: 100px; margin-bottom: 50px">Thông tin sinh viên </h1>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
        </tr>
        </thead>
        <tbody>
        <?php $users = new \Correct_Assignment1\USERs();
        ?>
        <?php foreach ($users->getUsesr() as $s): //thay {} bằng { = : , } = endforeach; ?>
            <tr>
                <th scope="row"><?php echo $s["id"]; ?></th>
                <td><?php echo $s["name"]; ?></td>
                <td><?php echo $s["email"]; ?></td>
                <td><?php echo $s["password"]; ?></td>
            </tr>
        <?php endforeach;//lam the nay de khỏi lẫn với bọn khác như if else.......  ?>
        </tbody>
    </table>
</div>
</body>
</html>
