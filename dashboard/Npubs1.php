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

    <title>Add Pubs</title>

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
       include('navigation4.php');
    ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="post1.php">Post News<span class="sr-only">(current)</span></a></li>
            <li><a href="Nprograms2.php">Post New Programs</a></li>
            <li class="active"><a href="#">Post Publicity Images</a></li>
            <li><a href="Nchoirs1.php">Post Choir Images</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Post Programs</h1>

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
           global $file_location;
		 if(isset($_POST['Submit']))
		 {
			if(getimagesize($_FILES['file']['tmp_name'])== FALSE)
			{
			 	echo "Select an image Please!!!";
			}else{
				$targetFolder = "../img/";
				$file_location = "img/";
				$name = $_FILES['file']['name'];
				$targetFolder = $targetFolder.basename($_FILES['file']['name']);
				$file_location = $file_location.basename($_FILES['file']['name']);
				$image_file_type = pathinfo($targetFolder,PATHINFO_EXTENSION);
				$sitiuation = move_uploaded_file($_FILES['file']['tmp_name'],$targetFolder);
				if(!$sitiuation)
				{
					echo "<h1 style='color:#000;'>Wapi bya Failinz  </h1>".$_FILES['file']['error'];
				}else{
					saveimage($name,$file_location);
				}
			}
		 }
		 function saveimage($name,$file_location)
		 {
		  	 $username = $_POST['BigTitle'];
             include('../connection.php');
             $Result=mysqli_query($conn,'INSERT INTO pubs VALUES("","'.$username.'","'.$name.'")');
			if($Result)
			{
			 	echo"<br /><h3>Image Published!!!</h3>";
			}
			else
			{
				echo"<br /><h3>Image not Published!!!</h3>";  
			}
		 }
	          ?>
		  	 <form role="form" method="post" enctype="multipart/form-data" action='Npubs1.php'>
			 	   <div class="form center-block">
				   		<div class="form-group">
							 <label for="BigTitle" style="color:#000000">Title:</label><br />
							 <input class="form-control" type="text" id="BigTitle" name="BigTitle" required /><br /><br />
							 <label style="color:#000000">Image:</label><br />
							 <input type="file" class="form-control" name="file" required />
						</div>
						<input type="submit" class="btn btn-link" name="Submit" value="Submit" />
				   </div>
			 </form>
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
