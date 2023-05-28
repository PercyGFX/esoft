<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> EMC Mobile Admin Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</head>

<body class="">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">Store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link active">ADD Product <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item my-2 my-lg-0">
                        <a class="nav-link" href="login.php">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="container d-flex justify-content-center">
            <span class="border m-5 w-50">

                <form class="p-5">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label for="inputEmail4">Product Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputPassword4">Price</label>
                            <input type="number" class="form-control" id="price" name="price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Quantity</label>
                        <input type="number" class="form-control" id="inputAddress">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Description</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Color</label>
                        <input type="text" class="form-control" id="color" name="color">
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="matara" name="matara">
                            <label class="form-check-label" for="gridCheck">
                                Matara
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="galle" name="galle">
                            <label class="form-check-label" for="gridCheck">
                                Galle
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="hambanthota" name="hambanthota">
                            <label class="form-check-label" for="gridCheck">
                                Hambanthota
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Add product</button>
                </form>
            </span>
        </div>


    </div>
</body>

</html>