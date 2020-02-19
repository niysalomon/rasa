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
       include('navigation4.php');
    ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Post News<span class="sr-only">(current)</span></a></li>            
             <li ><a href="../Nworkers.php">regist new worker</a></li>
            <li><a href="Nprograms.php">Post New Programs</a></li>                       
            <li><a href="Nadmin.php">Insert New Admin</a></li>
            <li><a href="Nbishopfiles.php">My Useful Documents</a></li>
            <li><a href="Ndistrict.php">New District</a></li>
            <li><a href="Nparish.php">New parish</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Bishop. Emmanuel NGENDAHAYO</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Title</h4>
              <span class="text-muted">Add Newsr</span>
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
			if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
			{
			 	echo "Select an image Please!!!";
			}else{
				$targetFolder = "../img/";
				$file_location = "img/";
				$name = $_FILES['image']['name'];
				$targetFolder = $targetFolder.basename($_FILES['image']['name']);
				$file_location = $file_location.basename($_FILES['image']['name']);
				$image_file_type = pathinfo($targetFolder,PATHINFO_EXTENSION);
				$sitiuation = move_uploaded_file($_FILES['image']['tmp_name'],$targetFolder);
				if(!$sitiuation)
				{
					echo "<h1 style='color:#000;'>Wapi bya Failinz  </h1>".$_FILES['image']['error'];
				}else{
					saveimage($name,$file_location);
				}
			}
		 }
		 function saveimage($name,$file_location)
		 {
		  	$Btitle= $_POST['BigTitle'];
			$Stitle= $_POST['SmallTitle'];
			$Content= $_POST['Comment'];
      $dates=date("d/m/Y");
			include("../connection.php");
			$qry="INSERT INTO news(Title,Resume,Image,Name,Content,date) values('$Btitle','$Stitle','$file_location','$name','$Content',$dates";
			$result=mysqli_query($conn,$qry);
			if($result)
			{
			 	echo"<br /><h3>News Published!!!</h3>";
			}
			else
			{
				echo"<br /><h3>News not Published!!!</h3>";  
			}
		 }
	?>
  <div class="col-md-6 text-center" style="background-color:gray;">
		  	 <form role="form" method="post" enctype="multipart/form-data" action='post.php'>
			 	   <div class="form center-block">
				   		<div class="form-group">
							 <label for="exampleInputFile" style="color:#000000">File input</label>
							 <input type="file" name="image" required />
							 <label for="BigTitle" style="color:#000000">Title</label><br />
							 <input class="form-control" type="text" id="BigTitle" name="BigTitle" required /><br /><br />
							 
							 <label for="SmallTitle" style="color:#000000">Resume:</label><br />
							 <textarea class="form-control" rows="2" name="SmallTitle" required ></textarea><br /><br />
							 <label style="color:#000000">Paragraphs:</label><br />
							 <textarea class="form-control" rows="5" name="Comment" required ></textarea>
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
