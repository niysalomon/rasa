<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

	<script type="text/javascript" src="formoid2_files/formoid1/formoid-solid-light-green.js"></script>
	
	<link rel="stylesheet" href="formoid2_files/formoid1/formoid-solid-light-green.css" type="text/css" />
</head>

<body>
	  <?php
	  
	  include('connection.php');
	  $loop = "JJJ";
	  $loop2 = "";
	  /*
	  if(isset($_POST['id']))
	  {
	    $loop = $_POST['rimwe'];
	    $loop2 = $_POST['rimweqq1'];
	  }
	  else */
	  if($_POST['rimwex']=='xxxx')
	  {
	  $loop = $_POST['rimweqq'];
	  $loop2 = $_POST['rimweqq1'];
	  }
	  else
	  {
	  $loop = $_POST['rimwe'];
	  $loop2 = $_POST['rimwe1'];
	  }
	  //else
	  //$loop = 1;

	  $pipsql = mysqli_query($conn,"SELECT * FROM gallery WHERE id=$loop");
		 while($myrow = mysqli_fetch_assoc($pipsql))
		 {
		   echo '<img width="100%" class="center-block img-responsive coner" src="'.$myrow['photo'].'" alt="Generic placeholder image">';
		 }
	  ?>





</body>
</html>
