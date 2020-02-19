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

    <title>Add News</title>

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
       include('navigation1.php');
    ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="index.php">Former members <span class="sr-only">(current)</span></a></li>
            <li ><a href="Fmembers.php">List of Former members</a></li>
            <li><a href="Nmembers.php">New members</a></li>
            <li><a href="News.php">News</a></li>
            <li><a href="message.php">Messages</a></li>
            <li><a href="programs.php">Programs&Pubs</a></li>
            <li class="active"><a href="insertAbout.php">About rasa</a></li>
            <li><a href="Nfile.php">Post file</a></li>
            <li><a href="vids.php">Videos</a></li>
            <li><a href="insertContact1.php">Contact</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Post News</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Title</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

          <h2 class="sub-header">
            <?php 
            echo $_SESSION['name'];
            ?>
          </h2>
           <?php
		
	         ?>
  <div class="col-md-6 text-center" style="background-color:gray;">
  <?php
    if(isset($_POST['Submit'])){
      $about=$_POST['amateka'];
      include('../connection.php');
              $Result=mysqli_query($conn,'INSERT INTO about(id,Amateka,date) VALUES("","'.$about.'",now())');
              if($Result)
									{
										echo'<p align="center"><h3>Message set!</h3></p>';
									}
									else
									{
										echo'<p align="center"><h3>Message not set!</h3></p>';  
									}
    }
  ?>
		  	 <form role="form" method="post" enctype="multipart/form-data" action='insertAboutUs.php'>
			 	   <div class="form center-block">
				   		<div class="form-group">
							 <label style="color:#000000">amateka ya EAR BYUMBA:</label><br />
							 <textarea class="form-control" rows="5" name="amateka"  ></textarea>
						</div>
						<button type="submit" class="btn btn-default" name="Submit">Submit</button>
				   </div>
			 </form>
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
