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
    <?php
    require "connection.php";
    session_start();
    $session = $_SESSION['mobilNo'];
    $select = "SELECT * FROM merchant WHERE mobilNo = '$session';";
    $qury = mysqli_query($conn, $select);
    ?>
    <div class="container-fluid">
        <div class="row">
      <?php
       if(0 < mysqli_num_rows($qury)){
        while($result = mysqli_fetch_array($qury))
        {
      ?>
      <div class="col-md-4">
        <div class="card m-3">
          <img src="<?php echo $result['img']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h1 class="card-title">
              <?php echo $result['title']; ?>
              </h5>
              <p class="card-text">
                <?php echo $result['dirciption']; ?>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <?php echo $result['price']; ?>
            </li>
            <li class="list-group-item">
              <?php echo $result['address']; ?>
            </li>
            <li class="list-group-item">
              <?php echo $result['mobilNo']; ?>
            </li>
          </ul>
    
          <div class="card-body">
                          <a href="yourCardUpdate.php" class="card-link">update</a>
                          <a href="yourCardDelete.php" class="card-link">delete</a>
                        </div>
        </div>
      </div>
      <?php
                       }
                    }
      ?>
        </div>
    </div>
    </div>
    


<!-- footer -->
<div class="container-fluid my-footer text-white text-center" style="margin-top: 80vh;">
        <p>Lorem ipsum dolor sit amet consectetur.</p>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>