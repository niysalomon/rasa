<?php 
include_once("connection.php");

//insert image 
if(isset($_POST['save']))
{
if(($_FILES['file']['type'] =='img/gif')
||($_FILES['file']['type'] =='img/jpeg')
||($_FILES['file']['type'] =='img/png')
&& ($_FILES['file']['size'] < 9000000))

         {
		 if($_FILES['file']['error'] > 0)
		 
		     { 
			 echo "return code:".$_FILES['file']['error'];
			 }
			 else if(file_exists('upload/'.$_FILES['file']['name']))
			 
			 {
			 echo $_FILES['file']['name']."Already exist";
			 }
			 else if(move_uploaded_file($_FILES['file']['tmp_name'],
			         'upload/'.$_FILES['file']['name']))
					 
					 {
					 $part = $_FILES['file']['name'];
					 $fname = $_POST['fname'];
                     $lname = $_POST['lname']; 					 
					 $gender= $_POST['gender'];
					 $occupation = $_POST['occupation']; 
					 $diocese = $_POST['diocese']; 
					 $email = $_POST['email'];
					 $tel = $_POST['tel']; 					 
					 $username = $_POST['username']; 
					 $password = $_POST['password']; 
					 
					 
					 $sql = mysqli_query($conn,"INSERT INTO rasaformermembers
					 VALUES('',
					 '$fname',
					 '$lname',
					 '$gender',
					 '$occupation',
					 '$diocese',
					 '$email',
					 '$tel',
					 '$username',
					 '$password',
					 '$part')");
					 
					 if($sql)
					 {
					 echo "successfully insert this record.......";
					 header('location:index.php');
					 }
					 else
					      {
						  echo "error insert";
						  }
					 }
		 }  
}
?>