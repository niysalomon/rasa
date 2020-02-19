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
		<title>rasa ur-nyarugenge</title>
        
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- ANIMATE  CSS -->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!-- PRETTY PHOTO  CSS -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <!--  STYLE SWITCHER CSS -->
    <link href="assets/css/styleSwitcher.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!--PINK STYLE VERSION IS BY DEFAULT, USE ANY ONE STYLESHEET FROM FOUR STYLESHEETS (pink,green,blue and brown) HERE-->
    <link href="assets/css/themes/pink.css" id="mainCSS" rel="stylesheet" />
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />

		
		
	</head>

	<body style:"
	background: url(assets/img/home.png);">
<?php
include_once('rasamenu.php');
?>
		<!-- CODES TO MAKE JUMBOTRON I.E LARGE TEXT OR ANY OTHER INFORMATION header image -->
		
	<div class = "container">		
     <div class="row">
	<div class="col-lg-8">
	<div class = "panel panel-default"  >
	<div class="panel-body">
	
	<form class="navbar-form navbar-right" role="search"  action="search.php" method="get">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search" name="search" required>
										</div>
										<input class="btn btn-danger" type="submit" class="btn btn-default" id="search_form" value="Search"/>
									</form>	
	
<h4>REGISTRATION FOR RASA MEMBER</h4>
<p>
<!--colunm1-->
					<div class="col-md-8 col-sm-8 col-xs-8 col-lg-8" style="width:100%;">
					<?php
					global $file_location;
		 if(isset($_POST['save']))
		 {
				$targetFolder = "img/";
				$file_location = "img/";
				$name=0;
				$name = $_FILES['file']['name'];
				$targetFolder = $targetFolder.basename($_FILES['file']['name']);
				$file_location = $file_location.basename($_FILES['file']['name']);
				$image_file_type = pathinfo($targetFolder,PATHINFO_EXTENSION);
				$sitiuation = move_uploaded_file($_FILES['file']['tmp_name'],$targetFolder);
				$check='SELECT user,email FROM christian WHERE email="'.$_POST['email'].'" OR user="'.$_POST['user'].'"';
				include('connection.php');
					$result=mysqli_query($conn,$check);
					$thisrow=mysqli_fetch_array($result);
					if($thisrow){
						while($thisrow){
							echo'<h4 align="center" style="color:#ff0000">Your username '.$thisrow['user'].' or email '.$thisrow['email'].' is already taken, choose another one!!!</h4>';
							break;
						}
					}else{
						saveimage($name,$file_location);
					}
			}
		 function saveimage($name,$file_location)
		 {
			$fname = $_POST['fname'];
			$lname = $_POST['lname']; 					 
			$gender= $_POST['gender'];
			$work = $_POST['work']; 
			$cell = $_POST['cell']; 
			$coll = $_POST['college']; 
			$dep = $_POST['department']; 
			$level = $_POST['level']; 
			$tel = $_POST['tel']; 
			$email = $_POST['email'];								 
			$username = $_POST['user']; 
			$password = $_POST['pass'];			
			include("connection.php");
			if($name){
				$_sql = "INSERT INTO christian(Id,firstname,lastname,gender,work,cell,college,department,level,tel,email,user,pass,photo) 
						VALUES('','$fname','$lname','$gender','$work','$cell','$coll','$dep','$level','$tel','$email','$username','$password','$name')";
				}
			else{
				$name="Facebook.jpg";
				$_sql = "INSERT INTO christian(Id,firstname,lastname,gender,work,cell,college,department,level,tel,email,user,pass,photo) 
						VALUES('','$fname','$lname','$gender','$work','$cell','$coll','$dep','$level','$tel','$email','$username','$password','$name')";
					}
			
			$result=(mysqli_query($conn,$_sql));
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
                        <td><label><span>First name*</span></label></td>
                        <td><b>:</b></td>
                        <td><input type="text" class="form-control" name="fname" required pattern="^[A-Za-z]+" id="name" placeholder="type your first name here!!"  /></td>
                        </tr>
                        
                        <tr>
                        <td><label> <span>Last name*</span></label></td>
                        <td><b>:</b></td>
                        <td><input type="text" class="form-control" name="lname" required pattern="^[A-Za-z]+" id="name" placeholder="type your last name here!!"  />
                        </td></tr>
                        
                        <tr><td><label> <span>Gender*</span></label></td>
                            <td><b>:</b></td>
                            <td><input type="radio" name="gender" checked value="Male" checked >Male
                            <input type="radio" name="gender" value="Female">Female</td>
                        </tr>
                        <tr><td><label> <span>Membership*</span></label></td>
                            <td><b>:</b></td>
                            <td><input type="radio" name="work" checked value="rasa" checked >rasa
                            <input type="radio" name="work" value="postrasa">Post rasa</td>
                        </tr>
                        
                        <tr><td><label><span>Cell*</span></label></td>
                        <td><b>:</b></td>
                        <td><select class="form-control" name="cell">
                        <option>select cell</option>
                        	<option>wakup</option>
                        	<option>Holy</option>
                        	<option>song of song</option>
                        	<option>umusingi</option>
                        	<option>Blessed</option>
                        	<option>New being</option>                        	
                        	<option>unity</option>
                        	</option> </td>
                        </tr>
                          <tr>
                        <td><label> <span>College*</span></label></td>
                        <td><b>:</b></td>
                        <td><input type="text" class="form-control" name="college" required placeholder="type your college" /></td>
                        </tr>
                        <td><label> <span>Department*</span></label></td>
                        <td><b>:</b></td>
                        <td><input type="text" class="form-control" name="department" required placeholder="type your department" /></td>
                        </tr>
                         <tr><td><label><span>Level*</span></label></td>
                        <td><b>:</b></td>
                        <td><select class="form-control" name="level">
                        <option>select level of study</option>
                        	<option>1</option>
                        	<option>2</option>
                        	<option>3</option>
                        	<option>4</option>
                        	<option>5</option>
                        	<option>6</option>                        	
                        	<option>ended</option>
                        	</option> </td>
                        </tr>
                        <tr>
                        <td><label> <span>Diocese*</span></label></td>
                        <td><b>:</b></td>
                        <td><input type="text" class="form-control"  name="diocese" required  pattern="^[A-Za-z]+"  placeholder="your current diocese here!!" /></td>
                        </tr>
                         <tr>
                        <td><label> <span>Tel*</span></label></td>
                        <td><b>:</b></td>
                        <td><input type="tel" class="form-control"  name="tel" required  placeholder="your phone contact here!!" /></td>
                        </tr>
                        <tr>
                        <td><label> <span>Email*</span></label></td>
                        <td><b>:</b></td>
                        <td><input type="email" class="form-control" name="email" required placeholder="type your email. example@domain" /></td>
                        </tr>      
                        <tr>
                        <td><label> <span>Username*</span></label></td>
                        <td><b>:</b></td>
                        <td><input type="text" class="form-control"  name="user" required  pattern="^[A-Za-z0-9]+" placeholder="create username!!" /></td>
                        </tr>
                        
                        <tr>
                        <td><label> <span>Password*</span></label></td>
                        <td><b>:</b></td>
                        <td><input type="password" class="form-control"  name="pass" required  pattern="^[A-Za-z0-9]+" placeholder="create password here!!" /></td>
                        </tr>
                        
                        <tr>
                        <td><label> <span>profile photo*</span></label></td>
                        <td><b>:</b></td>
                        <td>
						<?php
						echo '<input type="file" class="form-control"  name="file" placeholder="upload photo!!"/>';
						?>
						<br /></td>
                        </tr>
                        
                        <tr>
                        <td></td><td></td><td><input type="submit" class="btn btn-success" value="Register" name="save" />
                        <a href="index.php" class="btn btn-danger" >cancel</a></td>
                        </tr>
                    </table>
					</form>
					</div>

</P>
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

	<?php
	include("footer.php");
	?>
	
<!-- =======FOOTER CODES END HERE =================  -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script scr="js/bootstrap.min.js"></script>
	 <!--  JQUERY CORE SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  SCROLL SCRIPTS -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  WOW ANIMATION SCRIPTS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- EASY PIE CHART SCRIPTS -->
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <!-- PRETTY PHOTO SCRIPTS -->
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <!--  STYLE SWITCHER SCRIPTS -->
    <script src="assets/js/styleSwitcher.js"></script>
    <!--  CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
	</body>
</html>
