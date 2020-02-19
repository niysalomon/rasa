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

include("../connection.php");
            if(isset($_POST['sub'])){
              $pname=$_POST['pname'];
              $Did=$_POST['Did'];
            
              
              $Result=mysqli_query($conn,"INSERT INTO parishs(pid,pname,Did) VALUES(null,'$pname','$Did')");
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
         
         <form method="post" enctype="multipart/form-data" action="Nparish.php">
			 	   <div class="form center-block">
				   		<div class="form-group">
							 <label style="color:#000000">parish name:</label>
							 <input type="text" id="pname" name="pname" required /><br /><br />
               <label style="color:#000000">District name:</label>
               <select name="Did">
                 
                   <?php
                   include("../connection.php");
                  $select=mysqli_query($conn,"select * from districts");
                  if (mysqli_num_rows($select)>0) {
                    echo"<table>";

                    while ($disp=mysqli_fetch_array( $select)) {
                      echo"<option value='".$disp['Did']."'>".($disp['Dname'])."</option>";
                    }
                    echo"</table>";
                  }

                   ?>
                 
               </select> <br /><br />
               <input type="submit" name="sub" value="save">
               </div>
			 </form>
	          
    </body>
</html>