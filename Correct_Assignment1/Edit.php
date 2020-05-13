<?php //require_once "USERs.php" ;?>
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
<!---->
<!--    <title>EDIT </title>-->
<!--</head>-->
<!--<body>-->
<!--<h1> Edit</h1>-->
<!--<div class="container">-->
<!---->
<!--    <div class="container">-->
<!--        <h1 style="margin: 50px 0 50px 0; text-align: center"> Edit</h1>-->
<!--        <form action="post_register.php" , method="post">-->
<!--            --><?php
//            $id = $_GET["id"];
//            $user = new \Correct_Assignment1\USERs();
//            $user = $user->find($id);
//            ?>
<!--            <div class="form-group">-->
<!--                <label for="exampleInputName1">Name</label>-->
<!--                <input type="name" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" >-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label for="exampleInputEmail1">Email</label>-->
<!--                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >-->
<!--                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label for="exampleInputPassword1">Password</label>-->
<!--                <input type="password" class="form-control" id="exampleInputPassword1" >-->
<!--            </div>-->
<!--            <button type="submit" class="btn btn-primary">Edit</button>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->
<!--</body>-->
<!--</html>-->

<?php require_once "USERs.php" ;?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Edit</h1>
        <form action="post_edit.php" method="post">
            <?php
            $id = $_GET["id"];
            $user = new Correct_Assignment1\User();
            $user = $user->find($id);
            ?>
            <input type="hidden" name="id" value="<?php echo $user->id;?>"/>
            <div class="form-group">
                <input class="form-control" value="<?php echo $user->name;?>" name="name" type="text" placeholder="Name"/>
            </div>
            <div class="form-group">
                <input class="form-control" value="<?php echo $user->email;?>" name="email" type="email" placeholder="Email"/>
            </div>
            <div class="form-group">
                <input class="form-control" name="password" type="password" placeholder="Password"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger">Update</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>