<?php
require_once 'connection.php';

$location = $_GET["location"];
$id = $_GET["id"];
$locat = strtolower($location);
$sql = "SELECT * FROM stock where id='$id'";
//    echo $sql;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
//                id, image, name, qty, discription, price, color, hamantota, matara, galle
$row = mysqli_fetch_assoc($result);
//while ($row = mysqli_fetch_assoc($result)) {
//
}

?>
<html>

    <head>

        <title> EMC Mobile Store</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
    

    </head>

    <body>

        <div class="container">
            <!-- Top navigation-->
            
            <div class="row">
                

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">EMC Phone</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                      
                        
                      </ul>
                     
                    </div>
                  </nav>

                
            </div>

            <!-- end Top navigation-->

            <!-- Hero section-->
            <div class="row my-3">

                
                    <div class="card-body">
                        
                            <!-- Background image -->
                          <div class="p-5 text-center bg-image" style=" background-image: url('images/Main banner.png');height: 400px;">
                          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                            <div class="d-flex justify-content-center align-items-center h-100">
                              <div class="text-white">
                                <h1 class="mb-3">EMC Mobile</h1>
                                <h4 class="mb-3">Hambanthota Branch</h4>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Background image -->
                        
                    </div>
                  


            </div>
            <!-- end hero secrtion-->

            <!-- single product section start-->


            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="row gx-4 gx-lg-5 align-items-center">
                            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="images/<?php echo $row["image"]; ?> " alt="..."></div>
                            <div class="col-md-6">
                                <div class="small mb-1">Product Id: <?php echo  $row["id"]; ?> </div>
                                <h1 class="display-5 fw-bolder"><?php echo  $row["name"]; ?> </h1>
                                <div class="fs-5 mb-5">
                                    
                                    <span>LKR <?php echo  $row["price"]; ?> </span>
                                </div>
                                <p class="lead"><?php echo  $row["discription"]; ?> </p>
                                <div class="d-flex">
                                   
                                   
                                </div>
                            </div>
                        </div>
                    
                    </div>
                  </div>
            </div>

                
                
            
            </div>
            <!-- single product section end-->

            <!-- Footer start-->
            <div class="row">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <p class="col-md-4 mb-0 text-body-secondary">© 2023 EMC Phone, Inc</p>
                
                    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    </a>
                
                    <ul class="nav col-md-4 justify-content-end">
                      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Contact Us</a></li>
                      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About Us</a></li>
                      
                    </ul>
                  </footer>
            </div>
        
        </div>
          


    </body>






    </html>