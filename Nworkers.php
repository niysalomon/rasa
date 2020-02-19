<!DOCTYPE html>
<?php
  session_start();
  $let=isset ($_SESSION['name']);
  if($let){
	  session_destroy();
  }
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ear Byumba</title>
        <link href="css/main.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles1.css" rel="stylesheet">
		<link href="3/ninja-slider.css" rel="stylesheet" />
    	<script src="3/ninja-slider.js"></script>
        <link href="3/thumbnail-slider.css" rel="stylesheet" type="text/css" />
		<script src="3/thumbnail-slider.js" type="text/javascript"></script>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<link href="main.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="js3/hack.js"> </script> 
		
	</head>

	<body style="background-color:#ffffff;">
  <?php
  include_once('navigation.php');
  ?>
		<!-- CODES TO MAKE JUMBOTRON I.E LARGE TEXT OR ANY OTHER INFORMATION header image -->
		
	<div class = "container">		
     <div class="row">
	<div class="col-lg-8">
	<div class = "panel panel-default"  >
	<div class="panel-body">
	<div class="page-header">
	worker REGISTRATION FORM
	</div>
	<form class="navbar-form navbar-right" role="search"  action="search.php" method="get">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search" name="search" required>
										</div>
										<input class="btn btn-danger" type="submit" class="btn btn-default" id="search_form" value="Search"/>
									</form>	
	<img class="featuredImg" src="images/rasa_logos.png" alt="log not found" width="100%" />
	
	<p>
	
						<div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
                     <?php
					global $file_location;
		 if(isset($_POST['save']))
		 {
					$targetFolder = "img/";
					$file_location = "img/";
					$name = $_FILES['file']['name'];
					$targetFolder = $targetFolder.basename($_FILES['file']['name']);
					$file_location = $file_location.basename($_FILES['file']['name']);
					$image_file_type = pathinfo($targetFolder,PATHINFO_EXTENSION);
					$sitiuation = move_uploaded_file($_FILES['file']['tmp_name'],$targetFolder);
					 include('connection.php');
					
						saveimage($name,$file_location);
							 }
		 function saveimage($name,$file_location)
		 {	
		 include("connection.php");	
		    $fname = $_POST['fname'];
            $lname = $_POST['lname']; 					 
			$gender= $_POST['gender'];
			$distr = $_POST['distr']; 
			$parish = $_POST['parish']; 
			$lochurch = $_POST['lochurch'];
			$post = $_POST['post']; 
			$tel = $_POST['tel']; 
			$email = $_POST['email'];
			$user = $_POST['user']; 
			$pass = $_POST['pass']; 			 
			if($name){
			$_sql = "INSERT INTO workers(id,fname,lname,gender,distr,parish,lochurch,post,tel,email,user,pass,photo) 
					 VALUES(null,'$fname','$lname','$gender','$distr','$parish','$lochurch','$post','$tel','$email','$user','$pass','$name')";
						}else{
			$name="agafoto.jpg";
			$_sql = "INSERT INTO workers(id,fname,lname,gender,distr,parish,lochurch,post,tel,email,user,pass,photo) 
					 VALUES(null,'$fname','$lname','$gender','$distr','$parish','$lochurch','$post','$tel','$email','$user','$pass','$name')";
						}
			$result=(mysqli_query($conn,$_sql));//(mysqli_query($conn,$_Sql));
			if($result)
			{
			 	echo'<br /><p align="center"><h3><script>

			 	window.alt("you are successfuly registered");

			 	</script>

			 	</h3></p>';
			}
			else
			{
				echo'<br /><p align="center"><h3>You\'re not Registered!!!</h3></p>';  
			}
		 }
		 ?>
<form action="Nworkers.php" method="post" enctype="multipart/form-data">
<table class="table">
   <tr>
     <td><label> <span>First name*</span></label></td>
	 <td><b>:</b></td>
	 <td><input type="text" class="form-control" name="fname"  required pattern="^[A-Za-z]+" placeholder="type your first name" /> </td>
	 </tr>
	 
	 <tr>
     <td><label><span>Last name*</span></label></td>
	 <td><b>:</b></td>
	 <td><input type="text" name="lname"  class="form-control" required pattern="^[A-Za-z]+" placeholder="type your last name" /> </td>
	 </tr>
	 
	 <td><label><span>Gender*</span></label></td><td><b>:</b></td>
	   <td><select name="gender" class="form-control" >
	   <option class="form-control" value="Male" checked >Male</option>
	   <option class="form-control" value="Female">Female</option>
	   </select>
	 </td>
   </tr>   
	
  <tr>
     <td><label><span>districts</span></label></td>
        <td><b><span>: </span></b></td> <td><span> <select name="distr" id="province" onChange="districtsChange(this);" class="form-control">
						    	
						    <option value="empty">Select district</option>
						    <option value="Byumba">Byumba</option>
						    <option value="Muhura">Muhura</option>
						    <option value="Mukono">Mukono</option>
						    <option value="Rutare">Rutare</option>
						    <option value="Kigarama">Kigarama</option> </select> </span></td></tr> 
						    
						    <tr><td> <label><span> Parishs</span></label> </td> <td><b>:</b> </td> <td> <select name="parish" id="districts"class="form-control"></td> </tr>
	
	 	  
	 <tr>
     <td><label><span>local church</span></label></td>
	 <td><b>:</b></td>
	 <td><input type="text" name="lochurch" class="form-control" placeholder="type your local church"/> </td>
	 </tr>	  
	 <tr>
	 <td><label><span>post</span></label></td>
	 <td><b>:</b></td>
	   <td><input type="text" class="form-control" name="post" class="input_text" placeholder="type your post"/></td>
	 </tr>
	 <tr>
     <td><label><span>Telephone</span></label></td>
	 <td><b>:</b></td>
	 <td><input type="tel" name="tel" class="form-control" minlength="10" maxlength="10" required pattern="^[0-9]+"placeholder="type your phone number" /> </td>
	 </tr>
	</select> </td>
	 </tr>
	 
	 <tr>
     <td><label><span>E-mail</span></label></td>
	 <td><b>:</b></td>
	  <td><input type="text" name="email"  class="form-control" required placeholder="type your email" /> </td>
	 </tr>	  
	 <tr>
     <td><label><span>Username</span></label></td>
	 <td><b>:</b></td>
	 <td><input type="text" name="user" class="form-control" required placeholder="type your username"/> </td>
	 </tr>
	 <tr>
     <td><label><span>Password</span></label></td>
	 <td><b>:</b></td>
	 <td><input type="password" name="pass" class="form-control" required placeholder="type your password"/> </td>
	 </tr>	  
	 <tr>
	 <td><label><span>Profile pic</span></label></td>
	 <td><b>:</b></td>
	   <td><input type="file" class="form-control" name="file" class="input_text" /></td>
	 </tr>

	 <tr>
    	<td></td><td></td><td><input type="submit" class="btn btn-success" value="Register" name="save" />
    	<a href="Nworkers.php" class="btn btn-danger" >cancel</a></td>
    </tr>
 </table></form>
					</div>
	
	</p>
	</div>
	
	</div>
	</div>
		
		<div class="col-lg-4">
	<p>
	<?php
	include("aside.php");
	?>
	</p>
	</div>

</div>
</div>

<!-- ============FOOTER CODES START======================= -->
<div class="container">
	<div class="row">
	<div class="col-md-14col-sm-14 col-xs-14 col-lg-14 color">
	<?php
	include('footer.php');
	?>
	</div>
	</div>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script scr="js/bootstrap.min.js"></script>
	</body>
</html>
