<html lang="en">
  <head>
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
            $let1 = isset($_POST['Submit3']);
            if($let1)
            {
              $Title = $_POST['Title'];
              $Paragraph = $_POST['Paragraph'];
              $day = $_POST['Day'];              
              include('../connection.php');
              $Result=mysqli_query($conn,"INSERT INTO programs(Title,Paragraph,Day,date) VALUES('$Title','$Paragraph','$day',now())");
              if($Result)
									{
										echo'<p align="center"><h3>Program set!</h3></p>';
									}
									else
									{
										echo'<p align="center"><h3>Program not set!</h3></p>';  
									}
            }
         echo'
         <form role="form" method="post" enctype="multipart/form-data" action="Nprograms1.php">
			 	   <div class="form center-block">
				   		<div class="form-group">
							 <label for="BigTitle" style="color:#000000">Title:</label><br />
							 <input class="form-control" type="text" id="BigTitle" name="Title" required /><br /><br />
               <label for="days" style="color:#000000">Select day of the week:</label><br />
               <select class="form-control" name="Day" required>
                  <option></option>
                  <option>Monday</option>
                  <option>Tuesday</option>
                  <option>Wednesday</option>
                  <option>Thursday</option>
                  <option>Friday</option>
                  <option>Saturday</option>
                  <option>Sunday</option>
               </select><br /><br />
							 <label style="color:#000000">Resume:</label><br />
							 <textarea class="form-control" rows="5" name="Paragraph" required ></textarea>
						</div>
						<input type="submit" class="btn btn-link" name="Submit3" value="Submit" />
				   </div>
			 </form>';
	          ?>
    </body>
</html>