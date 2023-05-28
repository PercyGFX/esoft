<?php
require_once '../connection.php';

$sql = "SELECT * FROM stock";
//    echo $sql;
$result = mysqli_query($conn, $sql);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> EMC Mobile Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</head>

<body class="">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand">Store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="store.php">ADD Product <span class="sr-only"></span></a>
                    </li>
                    <li class=" my-2 my-lg-0">
                        <a class="nav-link" href="login.php">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">

            <?php
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                // id, image, name, qty, discription, price, color, hamantota, matara, galle
                while ($row = mysqli_fetch_assoc($result)) {
                    echo ' <div class="col-md-12 col-lg-4 border w-25 m-3 p-3" style="">
                <img src="../images/' . $row["image"] . '" class="card-img-top" alt="..." id="image" name="image">
                <hr>
                <div class="card-body">
                    <h5 class="card-title" id="title" name="title">' . $row["name"] . '</h5>
                    <p class="card-text" id="desctption" name="desctption">' . $row["discription"] . '</p>
                    <p>Location : Galle - ' . $row["galle"] . ' | Matara -  ' . $row["matara"] . '  | Hambantota -  ' . $row["hamantota"] . ' </p>
                    <a href="../singleproduct.html" class="btn btn-primary">See More</a>
                </div>
            </div>';
                }
            }
            ?>

        </div>

    </div>
</body>

</html>