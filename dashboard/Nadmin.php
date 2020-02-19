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

    <title>Add new admin</title>

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
            <li class="active"><a href="#">Insert New Admin</a></li>            
             <li ><a href="../Nworkers.php">regist new worker</a></li>                       
             <li><a href="Nbishopfiles.php">New Documents</a></li>
            <li><a href="Ndistrict.php">New District</a></li>
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
              <span class="text-muted">Add admin</span>
            </div>
          </div>

          <h2 class="sub-header">
            <?php 
            echo $_SESSION['name'];
            ?>
          </h2>
           <?php
		global $file_location;
		 if(isset($_POST['Submit2']))
		 {
      $level = $_POST['adm'];
		  $Btitle= $_POST['BigTitle1'];
			$Content= $_POST['Comment1'];
			include("../connection.php");
			$qry="INSERT INTO admin(id,level,username,password) values('','$level','$Btitle','$Content')";
			$result=mysqli_query($conn,$qry);
			if($result)
			{
			 	echo"<br /><h3>Admin Updated!!!</h3>";
			}
			else
			{
				echo"<br /><h3>Admin Not Updated!!!</h3>";  
			}
		 }
	?>
  <div class="col-md-6 text-center" style="background-color:gray;">
		  	 <form role="form" method="post" enctype="multipart/form-data" action='Nadmin.php'>
			 	   <div class="form center-block">
				   		<div class="form-group">
                <label for="BigTitle1" style="color:#000000">admin level:</label><br />
               <p><input type="radio" name="adm" value="Main Admin" />Main Admin
               <input type="radio" name="adm" value="Other admin" checked />admin
              </p>
							 <label for="BigTitle1" style="color:#000000">Username:</label><br />
							 <input class="form-control" type="text" id="BigTitle1" name="BigTitle1" required /><br /><br />               
							 <label for="Comment1" style="color:#000000">Password:</label><br />
							 <input class="form-control" type="text" id="Comment1" name="Comment1"><br /><br />
						</div>
						<button type="submit" class="btn btn-default" name="Submit2">Submit</button>
				   </div>
			 </form>
    </div>
    <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Level</th>
                  <th>username</th>
                  <th>password</th>
                 <th>Control</th>
                </tr>
              </thead>
              <tbody>
  <?php
                include('../connection.php');
                $Result=mysqli_query( $conn,"SELECT * FROM admin");

                  while($row=mysqli_fetch_array($Result))
                  {
                    echo '
                         <tr>
                         <td>'.$row["id"].'</td><td>'.$row["level"].'</td>
                          <td>'.$row["username"].'</td><td>'.$row["password"].'</td>';
                          echo  '<td><a href="deleteAdmin.php?del='.$row["id"].'" 
                          class="btn btn-danger">Delete</a></p></th>';    
                  }
                ?>
              </table>
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
