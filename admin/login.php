<?php
// Start the session
session_start();
require_once '../connection.php';
$err = '';
if(isset($_POST["username"]) || isset($_POST["password"])){
//    id, username, password, status, role

    $username = $_POST["username"];
    $password = $_POST["password"];
    $pass  = md5($password);
    $sql = "SELECT * FROM user where username ='$username' and password='$pass'";
//    echo $sql;
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $_SESSION["login"] = "ok";
            header("Location: dashboard.php");
        }
    } else {
        $err = '<span class="alert alert-danger">Invalid Username or Password</span>';
    }

    mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> EMC Mobile Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</head>

<body class="container">

    <div class="container d-flex justify-content-center">
        <span class="border m-5 w-50">

<form action="login.php" method="post">
            <div class="row p-5">
                <div class="mb-3 row justify-content-center">
                    <img src="../images/login.jpg" class="justify-content-center col-2 w-50" alt="login">
                </div>

                <div class="mb-3 row justify-content-center">
                    <label for="email" class="col-2 col-form-label">username</label>
                    <div class="col-5">
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                </div>
                <div class="mb-3 row justify-content-center">
                    <label for="inputPassword" class="col-2 col-form-label">Password</label>
                    <div class="col-5">
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <? echo $err ?>
                </div>
                <div class="row justify-content-center">
                    <div class="col-2"></div>
                    <div class="col-5">
                        <button type="submit" class="btn btn-primary mb-3">Login</button>
                    </div>
                </div>
            </div>
    </form>
        </span>
    </div>
</body>

</html>