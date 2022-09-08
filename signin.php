<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <!-- nvacBar -->
    <?php
    require "navBar.php";

    ?>

    <div class="container register register-background">
        <div class="row ">
            <div class="col-md-3 register-left">
                <img src="img/red-rocket-png-5.png" alt="">
                <h2>Welcome</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                <a href="login.html">
                    <input type="submit" class="btn btn-xll btn-success" name="" value="Log-in Here">
                </a>
            </div>
            <div class="col-md-9 register-right">
                <form action="signinvalidation.php" method="post">
                    <Label>ENTER YOUR FIRST NAME</Label>
                    <br>
                    <input class="input-type" type="text" name="fname" placeholder="FIRST NAME" required>
                    <br>
                    <br>
                    <Label>ENTER LAST NAME</Label>
                    <br>
                    <input class="input-type" type="text" name="lname" placeholder="LAST NAME" required>
                    <br>
                    <br><Label>MOBILE NUMBER</Label>
                    <br>
                    <input class="input-type" type="number" name="mobilNo" placeholder="MOBILE NO" required>
                    <br>
                    <br><Label>FULL ADDRESS</Label>
                    <br>
                    <input class="input-type" type="text" name="address" placeholder="ADDRESS" required>
                    <br>
                    <br><Label> STRONG PASSWORD</Label>
                    <br>
                    <input class="input-type" type="text" name="password" placeholder="STRONG PASSWORD" required>
                    <br>
                    <br>
                    <input class="input-button btn-success" type="submit" value="Sign-in Here">
                </form>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="container-fluid my-footer text-white text-center">
        <p>Lorem ipsum dolor sit amet consectetur.</p>
    </div>





    
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>