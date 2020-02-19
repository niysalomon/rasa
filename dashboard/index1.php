<!DOCTYPE html>
<?php
  session_start();
  if (isset($_SESSION["name"])) {
    header("location:index.php"); 
    exit();
  $login=$_SESSION["name"];
  }
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

    <title>Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php
   
    $let = isset($_POST['SUBMIT']);
			 if($let)
			 {
    		$username = $_POST['NAME'];
				$password = $_POST['PASS'];
				include('../connection.php');
				$Result=mysqli_query($conn,'SELECT * FROM admin WHERE username="'.$username.'" AND password="'.$password.'"');
				$result=mysqli_fetch_array($Result) or die('
        <h3 style="color:#ff0000; text-align:center"> Sorry your name or password was wrong!!!</h3><br />
        <p align="center"><a class="btn btn-primary" href="index1.php">Try again</a><br /><a class="btn btn-success" href="#">Back home!</a></p>
        ');

        $_SESSION['name']=$username;
    
			  	while($row = $result)
	   			{
				//echo "<script> window.location = 'index.php';</script>";
				 	  switch($row['level']){
						case 'Main Admin':
							echo "<script> window.location = 'index.php';</script>";
							break;

              case 'Other admin':
              echo "<script> window.location = 'index2.php';</script>";
              break;
						
						default:
							echo "<script> window.location = 'index2.php';</script>";
							break;
					} 
				}
			}
        ?>

    <div class="container">

      <form class="form-signin" method="post" action="index1.php">
        <h2 class="form-signin-heading" align="center">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" name="NAME" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="PASS" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="SUBMIT" value="Sign in" />
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
