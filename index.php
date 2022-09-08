<?php
session_start();
if(isset($_SESSION['mobilNo'])){
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>

<body>
    
    <!-- navbar -->
    <?php
    require "navBar.php";
    ?>

    <!-- carousl -->
    <div class="container-fluid">
        <div class="row">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="project-1-img/home-1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-warning">First slide label</h3>
                            <div>
                                <p class="text-center">Some representative placeholder content for the second slide.</p>
                                <p><a href="" class="btn btn-warning mt-3">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="project-1-img/home-2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-warning">Second slide label</h3>
                            <div class="text-center">
                                <p>Some representative placeholder content for the second slide.</p>
                                <p><a href="" class="btn btn-warning mt-3">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="project-1-img/home-3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-warning">Third slide label</h3>
                            <div class="text-center">
                                <p>Some representative placeholder content for the second slide.</p>
                                <p><a href="" class="btn btn-warning mt-3">Read More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- card -->
    <?php
    require "card.php";
    echo '<script>alert(<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>)</script>;
     ';

    ?>


<!-- footer -->
<div class="container-fluid my-footer text-white text-center">
    <p>Lorem ipsum dolor sit amet consectetur.</p>
</div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>
<?php
}else{
    header("Location: login.php");
}
?>