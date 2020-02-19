<?php 
include_once("../connection.php");
if(isset($_POST['submit']))
{
 
					 $amateka = $_POST['phone'];
					 $sql = mysqli_query($conn,"INSERT INTO contact(Id,phone) VALUES('','$phone')") or die("error message");
					 
					 if($sql)
					 {
					 echo "successfully updated......";
					 header('location:index.php');
					 }
					 else
					      {
						  echo "error insert";
						  header('location:insertAboutUs.php');
						  }
					   
}
?>