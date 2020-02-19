<?php
  session_start();
  if (!isset($_SESSION["name"])) {
    header("location: ../index.php"); 
    exit();}
  ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

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
  <div class="col-sm-3 col-md-2 sidebar">          
            <ul class="nav nav-sidebar">
            <li class="active"><a href="Ndistrict.php">New District</a></li>
            <li><a href="#">Insert New Admin</a></li>            
             <li ><a href="../Nworkers.php">regist new worker</a></li>                               
             <li><a href="Nbfiles.php">New Documents</a></li>            
            <li><a href="Nparish.php">New parish</a></li>
            <li><a href="insertContact1.php">New Contact</a></li>
          </ul>
          </ul>
        </div>
         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Bishop. Emmanuel NGENDAHAYO</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Title</h4>
              <span class="text-muted">Add district</span>
            </div>
          </div>

          <h2 class="sub-header">
            <?php 
            echo $_SESSION['name'];
            ?>
          </h2>
           <?php
    global $file_location;
include_once("../connection.php");
            if(isset($_POST['sub'])){
              $Dname=$_POST['Dname'];
            
              
              $Result=mysqli_query($conn,"INSERT INTO districts(Did,Dname) VALUES(null,'$Dname')");
              if($Result)
									{
										echo'<p align="center"><h3></h3></p>';
									}
									else
									{
										echo'<p align="center"><h3>district not inserted!</h3></p>';  
									}
            }
            ?>
         
         <form method="post" enctype="multipart/form-data" action="Ndistrict.php">
			 	   <div class="form center-block">
				   		<div class="form-group">
							 <label style="color:#000000">district name:</label>
							 <input type="text" id="Dname" name="Dname" required /><br /><br />
               <input type="submit" name="sub" value="save">
               </div>
			 </form>
	          
    </body>
</html>