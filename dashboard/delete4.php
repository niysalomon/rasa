<?php
	include("../connection.php");
	if(isset($_GET['del'])){
		$ID = $_GET['del'];
		$sql= "DELETE FROM message WHERE id=$ID";
		$res= mysqli_query($conn,$sql) or die ("Failed".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=table4.php'>";
	}
?>