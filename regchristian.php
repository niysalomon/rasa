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
		<script type="text/javascript" src="js2/hack.js"> </script> 
		<script type="text/javascript" src="js3/hack3.js"> </script> 
		<link rel="shortcut icon" href="earlogo.PNG"/>
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
	CHRISTIAN REGISTRATION FORM
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
						saveimage($name,$file_location);
							 }
		 function saveimage($name,$file_location)
		 {		
		    //$cid = $_POST['cid'];
			$fname = $_POST['fname'];
            $lname = $_POST['lname']; 					 
			$gender= $_POST['gender'];
			$bdat = $_POST['bdat']; 
			$fath = $_POST['fath']; 
			$moth = $_POST['moth']; 
			$prov = $_POST['prov'];
			$dist = $_POST['distr']; 
			$sect = $_POST['sect']; 
			$cell = $_POST['cell']; 			
			$distr = $_POST['distr']; 
			@$parish = $_POST['parish']; 
			$lochurch = $_POST['lochurch']; 
			$tel = $_POST['tel'];						 
			include("connection.php");
			if($name){
				$_Sql="INSERT INTO  christians(cid,fname,lname,gender,bdat,fath,moth,prov,dist,sect,cell,distr,parish,lochurch,tel,photo) 
					 VALUES(null,'$fname','$lname','$gender','$bdat','$fath','$moth','$prov','$dist','$sect','$cell','$distr','$parish','$lochurch','$tel','$name')";
						}
			
						else{
			$name="agafoto.jpg";
			$_Sql="INSERT INTO  christians(cid,fname,lname,gender,bdat,fath,moth,prov,dist,sect,cell,distr,parish,lochurch,tel,photo) 
					 VALUES(null,'$fname','$lname','$gender','$bdat','$fath','$moth','$prov','$dist','$sect','$cell','$distr','$parish','$lochurch','$tel','$name')";
						}
			$result=(mysqli_query($conn,$_Sql));//(mysqli_query($conn,$_Sql));
			if($result)
			{
			 	echo'<br /><p align="center"><h3>You are registered!!!</h3></p>';
			}
			else
			{
				echo'<br /><p align="center"><h3>You\'re not Registered!!!</h3></p>';  
			}
		 }
		 ?>
<form action="" method="post" enctype="multipart/form-data">
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
	   <option class="form-control" value="Male" >Male</option>
	   <option class="form-control" value="Female">Female</option>
	   </select>
	 </td>
   </tr>
    <tr>
     <td><label><span>birth date </span></label></td>
	 <td><b>:</b></td>
	 <td><input type="text" name="bdat" class="form-control" placeholder="yyyy_mm_dd" required="required"> </td>
	 </tr>
	 <tr>
     <td><label><span>Father</span></label></td>
	 <td><b>:</b></td>
	  <td><input type="text" name="fath"  class="form-control" required pattern="^[A-Za-z]+" placeholder="type your father" /> </td>
	 </tr>
	 <tr>
     <td><label><span>Mother</span></label></td>
	 <td><b>:</b></td>
	  <td><input type="text" name="moth"  class="form-control" required pattern="^[A-Za-z]+" placeholder="type your mother" /> </td>
	 </tr>
   <tr>
     <td><label><span>Telephone* </span></label></td>
	 <td><b>:</b></td>
	 <td><input type="tel" name="tel" class="form-control" minlength="10" maxlength="10" required pattern="^[0-9]+"placeholder="type your phone"/> </td>
	 </tr>
	 <tr>
      <td><label><span>Province</span></label></td>
        <td><b><span>: </span></b></td> <td><span> <select name="prov" id="province" onChange="districtChange(this);" class="form-control">
						    	
						    <option value="empty">Select Province</option>
						    <option value="SOUTHERN">Southern</option>
						    <option value="EASTERN">Eastern</option>
						    <option value="NOTHERN">Northern</option>
						    <option value="WESTERN">Western</option>
						    <option value="KIGALI">Kigali</option> </select> </span></td></tr> 
						    
						    <tr><td> <label><span> District</span></label> </td> <td><b>:</b> </td> <td> <select name="dist" id="district"class="form-control"></td> </tr>
	 <tr>
     <td><label><span>sector*</span></label></td>
	 <td><b>:</b></td>
	 <td><input type="text" name="sect"  class="form-control" required pattern="^[A-Za-z]+" placeholder="type your sector" /> </td>
	 </tr>
	 <tr>
     <td><label><span>cell</span></label></td>
	 <td><b>:</b></td>
	 <td><input type="text" name="cell"  class="form-control" required placeholder="type your cell" /> </td>
	 </tr>
	
   <tr>
     <td><label><span>districts</span></label></td>
        <td><b><span>: </span></b></td> <td><span> <select name="distr" id="province" onChange="districtsChange(this);" class="form-control">
						    	
						    <option value="empty">Select district</option>
						    <option value="Byumba">Byumba</option>
						    <option value="Muhura">Muhura</option>
						    <option value="Mukono">Mukono</option>
						    <option value="Rutare">Rutare</option>
						    <option value="Kigarama">Kigarama</option> 
						    <option value="Ngarama">Ngarama</option>
						    <option value="Mukono">Muyumbo</option>
						    </select> </span></td></tr> 
						    
						    <tr><td> <label><span> Parishs</span></label> </td> <td><b>:</b> </td> <td> <select name="parish" id="districts"class="form-control"></td> </tr>
	 
	 <tr>
     <td><label><span>local church* </span></label></td>
	 <td><b>:</b></td>
	 <td><input type="text" name="lochurch" class="form-control" required placeholder="type your local church"/> </td>
	 </tr>	  
	 <tr>
	 <td><label><span>Profile pic</span></label></td>
	 <td><b>:</b></td>
	   <td><input type="file" class="form-control" name="file" class="input_text" /></td>
	 </tr>

	 <tr>
    	<td></td><td></td><td><input type="submit" class="btn btn-success" value="Register" name="save" />
    	<a href="regchristian.php" class="btn btn-danger" >cancel</a></td>
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
