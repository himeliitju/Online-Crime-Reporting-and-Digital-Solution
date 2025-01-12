<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    

    <title>Online GD</title>
</head>
<body>

    <div class="container-fluid">

    <!-- navbar starts -->
    <?php
        include "../php/navbar.php";
    ?>
    <!-- navbar ends -->


          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="content">
                  <h1>Have a Complaint?</h1>
                  
                  <hr>
                    <?php 
                        if(isset($_SESSION['nid'])) {
                            echo '<a href="complaint.php" aria-pressed="true">
                            <button type="button" class="btn btn-secondary">Click to Comlain!</button>
                            </a><br><br>';
                            echo '<a href="complaint.php" aria-pressed="true">
                            <button type="button" class="btn btn-secondary">Check History</button>
                            </a>';
                        }
                        else {
                            echo '<h3>Register Below &nbsp &nbsp<i class="fa fa-hand-o-down" aria-hidden="true"></i></h3>
                            <a href="registration.php" aria-pressed="true">
                            <button type="button" class="btn btn-secondary">Sign up!</button>
                            </a>';
                        }
                    ?>
                </div>
              </div>
            </div>
          </div>


    </div>




    <!-- Footer -->
    <?php
    include "../php/footer.php";
    ?>
    <!-- Footer ends here -->


    <script src="https://use.fontawesome.com/ef783540f8.js"></script>
    <script src="../Js/bootstrap.min.js"></script>
    <script src="../Js/jquery-3.6.0.min.js"></script>
</body>
</html>