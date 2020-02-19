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
            
            <li class="active"><a href="Nfile.php">Post file</a></li>
             <li><a href="post1.php">News</a></li>
             <li><a href="Nchoirs.php">Post photoes</a></li>
           <li><a href="../regchristian.php">Insert Christians</a></li>
           <li><a href="postouv.php">group,organisation&Districts</a></li>
            <li><a href="Nprograms.php">Post New Programs</a></li>
            <li><a href="Npubs.php">Post Publicity Images</a></li>                      
            <li><a href="Nvids.php">Post New Videos</a></li>
            <li ><a href="NvideoEmb.php">Embed New video</a></li>
             <li><a href="diofile.php">Post Diocese Documents</a></li>          
            
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
   global $file_location;
		 if(isset($_POST['Submit']))
		 {
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
		 function saveimage($name,$file_location)
		 {
      $about=$_POST['Name'];
      include('../connection.php');
              $Result=mysqli_query($conn,'INSERT INTO file(id,file,Name,date) VALUES("","'.$file_location.'","'.$about.'",now())');
              if($Result)
									{
										echo'<p align="center"><h3>File set!</h3></p>';
									}
									else
									{
										echo'<p align="center"><h3>File not set!</h3></p>';  
									}
    }
  ?>
		  	 <form role="form" method="post" enctype="multipart/form-data" action='Nfile.php'>
			 	   <div class="form center-block">
				   		<div class="form-group">
                             <label style="color:#000000">Choose your file:</label><br />
							 <input type="file" class="form-control" name="file" required/>
							 <label style="color:#000000">The name of your file:</label><br />
							 <input type="text" class="form-control" name="Name" required/>
						</div>
						<button type="submit" class="btn btn-default" name="Submit">Submit</button>
				   </div>
			 </form>
    </div>
    <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>File</th>
                 <th>Control</th>
                </tr>
              </thead>
              <tbody>
           <?php
                include('../connection.php');
                $Result=mysqli_query( $conn,"SELECT * FROM file");
                  while($row=mysqli_fetch_array($Result))
                  {
                    echo '
                         <tr>
                          <td>'.$row["id"].'</td>
                          <td>'.$row["Name"].'</td>
                          <td>'.$row["file"].'</td>';
                          echo  '<td><a href="deletefile.php?del='.$row["id"].'" 
                          class="btn btn-danger">Delete</a></p></th>';    
                  }
            ?>
              </table>
            </div>
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
