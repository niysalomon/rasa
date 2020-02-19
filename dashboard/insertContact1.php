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
            <li class="active"><a href="#">Insert New Admin</a></li>            
             <li ><a href="../Nworkers.php">regist new worker</a></li>                             
            
            <li><a href="Ndistrict.php">New District</a></li>
            <li><a href="Nparish.php">New parish</a></li>
            <li><a href="insertContact1.php">New Contact</a></li>

          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">INSERT NEW IT</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>WEB MASTER</h4>
              <span class="text-muted">EAR BYUMBA IT</span>
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
      $title=$_POST['title'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      include('../connection.php');
              $Result = mysqli_query($conn,"INSERT INTO contact(Id,title,phone,email) VALUES('','$title','$phone','$email')");
              if($Result)
									{
										echo'<p align="center"><h3>Contact set!</h3></p>';
									}
									else
									{
										echo'<p align="center"><h3>Contact not set!</h3></p>';  
									}
    }
  ?>
		  	 <form role="form" method="post" enctype="multipart/form-data" action="insertContact1.php" />
			 	   <div class="form center-block">
            <div class="form-group">
               <label style="color:#000000">Title:</label><br />
               <input type="text" class="form-control"  name="title"  />
            </div>
				   		<div class="form-group">
							 <label style="color:#000000">Phone number:</label><br />
							 <input type="text" class="form-control"  name="phone"  />
						</div>
            <div class="form-group">
               <label style="color:#000000">Email:</label><br />
               <input class="form-control"  name="email" type ="text" />
            </div>
						<button type="submit" class="btn btn-default" name="Submit">Submit</button>
				   </div>
			 </form>
    </div>
     <div>
      <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Phone</th>
                  <th>Email</th>
                  
                </tr>
              </thead>
              
        <ul class="nav">
            <?php
                include('../connection.php');
                $Result=mysqli_query( $conn,"SELECT * FROM contact");

                  while($row=mysqli_fetch_array($Result))
                  {
                    echo '
                         <tr>
                          <td>'.$row["Id"].'</td><td>'.$row["title"].'</td><td>'.$row["phone"].'</td><td>'.$row["email"].'</td>';
                          echo  '<td><p><button class="btn btn-primary">Edit</button><a href="deleteContact.php?del='.$row["Id"].'" 
                          class="btn btn-danger">Delete</a></p></th>';    
                  }
                ?>
              </table>
                </ul>

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
