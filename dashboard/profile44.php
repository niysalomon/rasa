<!DOCTYPE html>
<?php
  session_start();
  if (!isset($_SESSION["name"])) {
    header("location: ../index.php"); 
    exit();
  }
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

    <title>Edit</title>

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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <?php
      include("navigation5.php");
    ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <!--<div class="row">
          <div class="panel-group" id="accordion" role="tablist" aria-multiline="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Les juennes</a></h4>
              </div>

              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  yewe yewe yewe
                </div>
              </div>
            </div>
          </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Les juennes 2</a></h4>
              </div>

              <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  yewe yewe yewe
                </div>
              </div>
            </div>
          </div>
          </div>-->
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Edit News</a></li>
            <li><a href="profile33.php">Edit Programs of the week</a></li>
             <li><a href="profile55.php">Edit news photoes</a></li>
              <li><a href="profile44.php">Edit grp,distr&orgs</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Profile</h1>

          <div class="row placeholders">
           <!-- <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
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
            echo $_SESSION['name'];
            ?>
          </h2>
          <h4 class="page-header">Publicity</h4>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="Editable5.php"></iframe>
          </div>
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
