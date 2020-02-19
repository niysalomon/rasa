<html>
<head>
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
include('../connection.php');
$r=mysqli_query($conn,"SELECT id FROM workers");
$s=mysqli_fetch_array($r);

if(isset($_POST["submit"])){
        foreach ($_POST["id"] AS $id){
                            /*echo 'ID is ' .$id.'<br />';
                            echo 'Field1 is ' .$_POST["field1"][$id].'<br />';
                            echo 'Field2 is ' .$_POST["field2"][$id].'<br />';*/
                            $field1= mysqli_real_escape_string($conn,$_POST["fname"][$id]);
                            $field2 = mysqli_real_escape_string($conn,$_POST["lname"][$id]);                          
                            $field4 = mysqli_real_escape_string($conn,$_POST["distr"][$id]);
                            $field5 = mysqli_real_escape_string($conn,$_POST["parish"][$id]);
                            $field6 = mysqli_real_escape_string($conn,$_POST["lochurch"][$id]);
                            $field7 = mysqli_real_escape_string($conn,$_POST["post"][$id]);
                            $field8 = mysqli_real_escape_string($conn,$_POST["tel"][$id]);
                            $field9 = mysqli_real_escape_string($conn,$_POST["email"][$id]);
                            $field10= mysqli_real_escape_string($conn,$_POST["user"][$id]);
                            $field11= mysqli_real_escape_string($conn,$_POST["pass"][$id]);                            
                            
                            $update="UPDATE `workers` 
                            SET `fname` = '$field1', `lname` = '$field2', `distr` = '$field4', `parish` = '$field5', `lochurch` = '$field6',
                             `post` = '$field7', `tel` = '$field8',`email` = '$field9', `user` = '$field10', `pass` = '$field11'
                            WHERE `id` = $id LIMIT 1 ";
                            mysqli_query($conn,$update) or die (msqli_error());
                        }
}
$sql="SELECT * FROM workers ORDER BY id DESC";
			$res=mysqli_query($conn,$sql);
			if(!$res)
			{
				die("Query Failed!");
			}
            if( mysqli_num_rows($res) > 0){
				echo '<form method="post" action="Editable1.php" enctype="multipart/form-data">';
				echo '
                    <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Firstname</th>
                            <th>Lastname</th>                            
                            <th>district</th>
                            <th>parish</th>
                            <th>local church</th>
                            <th>post</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>username</th>
                            <th>password</th>                            
                            </tr>
                        </thead>
                        <tbody>';
                while($row=mysqli_fetch_assoc($res)){
                    echo'
                            <tr>
                            <td>'.$row["id"].'</td>
                            <td><input class="form-control" type="text" name="fname['.$row["id"].']" value="'.$row["fname"].'"></td>
                            <td><input class="form-control" type="text" name="lname['.$row["id"].']" value="'.$row["lname"].'"></td>                            
                            <td><input class="form-control" type="text" name="distr['.$row["id"].']" value="'.$row["distr"].'"></td>
                            <td><input class="form-control" type="text" name="parish['.$row["id"].']" value="'.$row["parish"].'"></td>
                            <td><input class="form-control" type="text" name="lochurch['.$row["id"].']" value="'.$row["lochurch"].'"></td>
                            <td><input class="form-control" type="text" name="post['.$row["id"].']" value="'.$row["post"].'"></td>
                            <td><input class="form-control" type="tel" name="tel['.$row["id"].']" value="'.$row["tel"].'"></td>
                            <td><input class="form-control" type="email" name="email['.$row["id"].']" value="'.$row["email"].'"></td>
                            <td><input class="form-control" type="text" name="user['.$row["id"].']" value="'.$row["user"].'"></td>                            
                            <td><input class="form-control" type="text" name="pass['.$row["id"].']" value="'.$row["pass"].'">
                                <input type="hidden" name="id[]" value="'.$row["id"].'">
                            </td>
                            </tr>';}
                    echo'</tbody>
                        </table>
                        <br />
                    </div>';
                echo'<p class="text-center"><input type="submit" name="submit" value="Save CHANGES" class="btn btn-default btn-lg"></p>';
                echo'</form>';}
    ?>
    </body>
    </html>