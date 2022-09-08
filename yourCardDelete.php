
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
    <?php
    require "navBar.php";
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12" style= "margin-top: 20vh">
                <form action="deletion.php" method="post">
                    <label for="">ENTER SAME PRODUCT TITLE</label>
                    <br>
                    <input type="text" name="title" class="input-type" placeholder="TITLE OF PRODUCT">
                    <br>
                    <br>
                    <input type="submit" class="input-type">
                </form>
            </div>
        </div>
    </div>
    





     <!-- footer -->
     <div class="container-fluid my-footer text-white text-center" style="margin-top: 60vh;" >
        <p>Lorem ipsum dolor sit amet consectetur.</p>
    </div>


<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>