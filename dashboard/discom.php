<!DOCTYPE html>
<?php
  session_start();
    
  if (!isset($_SESSION["name"])) {
   header("location: ../index.php"); 
   exit();}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Salomon</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.js"></script>
		<link href="../main.css" rel="stylesheet" type="text/css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <?php
       include('navigation3.php');
    ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">

          <ul class="nav nav-sidebar">                      
            <ul class="nav nav-sidebar">  
              <li class="active"><a href="#">Communication</a></li>                     
           <li><a href="displayall.php">Groups,Districts&Organisations</a></li>
            <li><a href="News.php">News</a></li>
            <li><a href="newspics.php">News photoes</a></li> 
            <li><a href="dispchrist.php">Display Christian</a></li>
            <li><a href="programs1.php">Programs&Pubs</a></li>
            <li><a href="Nfile.php">files</a></li>                      
            <li><a href="vids.php">Videos</a></li>
            <li><a href="../diodocs.php">Diocese Documents</a></li>
             <li><a href="pics.php  ?>">Gallery</a></li> 
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <?php 
            /*include("../connection.php");
            $pipsql = mysqli_query($conn,"SELECT * FROM art_pics ORDER BY id LIMIT 1,4");
						while($myrow = mysqli_fetch_array($pipsql))
            echo '<div class="col-xs-6 col-sm-3 placeholder">
              <img src="../../../img/pic10.jpg" class="img-responsive" alt="No picture">
              <h4>'.$myrow['Title'].'</h4>
              <span class="text-muted">'.$myrow['Title'].'</span>
            </div>';*/?>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Title</h4>
              <span class="text-muted">Something else</span>
            </div>
            <!--<div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>-->
          </div>

          <h2 class="sub-header">
            <?php 
            //echo $_SESSION['name'];
            ?>
          </h2>
          <?php 
            include('table41.php');
          ?>
        </div>
      </div>
    </div>

    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
