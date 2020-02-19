<?php
  session_start();
    
  if (!isset($_SESSION["name"])) {
    header("location:index.php"); 
    exit();}
?>


<html>
<head>
<link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard/dashboard.css" rel="stylesheet">
    <link href="dashboard/css/main.css" rel="stylesheet">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<link href="main.css" rel="stylesheet" type="text/css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
       include('dashboard/vigation.php');
    ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">

          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">My Documents<span class="sr-only">(current)</span></a></li>            
            <li><a href="dashboard/index.php">Diocese Workers</a></li>
            <li><a href="dashboard/message.php">Messages</a></li>
            <li><a href="dashboard/dispwreport.php">View Reports</a></li>
           
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Bishop. Emmanuel NGENDAHAYO</h1>

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
            echo $_SESSION['name'];
            ?>
<div class="table-responsive">
      <?php
      include('bb.php');
      ?>
          </div>
          </div>
      </div>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
          <script src="../../dist/js/bootstrap.min.js"></script>
          <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
          <script src="../../assets/js/vendor/holder.min.js"></script>
          <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
          <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        </body>
</html>