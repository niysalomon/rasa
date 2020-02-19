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
 $id=$_REQUEST['id'];
include('../connection.php');
if(isset($_POST["submit"])){
    $id=$_REQUEST['id'];
        foreach ($_POST["id"] AS $id){
                            /*echo 'ID is ' .$id.'<br />';
                            echo 'Field1 is ' .$_POST["field1"][$id].'<br />';
                            echo 'Field2 is ' .$_POST["field2"][$id].'<br />';*/
                            $field1= mysqli_real_escape_string($conn,$_POST["fname"][$id]);
                            $field2 = mysqli_real_escape_string($conn,$_POST["lname"][$id]);                            
                            $field3 = mysqli_real_escape_string($conn,$_POST["bdat"][$id]);
                            $field4 = mysqli_real_escape_string($conn,$_POST["fath"][$id]);
                            $field5 = mysqli_real_escape_string($conn,$_POST["moth"][$id]);
                            $field6 = mysqli_real_escape_string($conn,$_POST["prov"][$id]);
                            $field7 = mysqli_real_escape_string($conn,$_POST["dist"][$id]);
                            $field8 = mysqli_real_escape_string($conn,$_POST["sect"][$id]);
                            $field9 = mysqli_real_escape_string($conn,$_POST["cell"][$id]);
                            $field10 = mysqli_real_escape_string($conn,$_POST["distr"][$id]);
                            $field11= mysqli_real_escape_string($conn,$_POST["parish"][$id]);
                            $field12 = mysqli_real_escape_string($conn,$_POST["lochurch"][$id]);
                            $field13 = mysqli_real_escape_string($conn,$_POST["tel"][$id]);
                            
                            $update="UPDATE `christians` 
                            SET `fname` = '$field1', `lname` = '$field2', `bdat` = '$field3', `fath` = '$field4', `moth` = '$field5', `prov` = '$field6', `dist` = '$field7',
                             `sect` = '$field8',`cell` = '$field9', `distr` = '$field10', `parish` = '$field11', `lochurch` = '$field12',`tel` = '$field13'
                            WHERE `cid` = $id LIMIT 1 ";
                            mysqli_query($conn,$update) or die (msqli_error());
                        }
}

$sql="SELECT * FROM christians WHERE cid=$id";
			$res=mysqli_query($conn,$sql);
			if(!$res)
			{
				die("Query Failed!");
			}
            if( mysqli_num_rows($res) > 0){
				echo '<form method="post" action="Editable2.php" enctype="multipart/form-data">';
				
                echo '
                    <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>bdate</th>
                            <th>Father</th>
                            <th>Mother</th>
                            <th>provinc</th>
                            <th>District</th>
                            <th>Sector</th>
                            <th>Cell</th>
                            <th>District</th>
                            <th>parish</th>
                            <th>lochurch</th>
                            <th>teleph</th>
                            </tr>
                        </thead>
                        <tbody>';
                while($row=mysqli_fetch_assoc($res)){
                    echo'
                            <tr>
                            <td>'.$row["cid"].'</td>
                            <td><input class="form-control" type="text" name="fname['.$row["cid"].']" value="'.$row["fname"].'"></td>
                            <td><input class="form-control" type="text" name="lname['.$row["cid"].']" value="'.$row["lname"].'"></td>
                            <td><input class="form-control" type="text" name="bdat['.$row["cid"].']" value="'.$row["bdat"].'"></td>
                            <td><input class="form-control" type="text" name="fath['.$row["cid"].']" value="'.$row["fath"].'"></td>
                            <td><input class="form-control" type="text" name="moth['.$row["cid"].']" value="'.$row["moth"].'"></td>
                            <td><input class="form-control" type="text" name="prov['.$row["cid"].']" value="'.$row["prov"].'"></td>
                            <td><input class="form-control" type="tel" name="dist['.$row["cid"].']" value="'.$row["dist"].'"></td>
                            <td><input class="form-control" type="text" name="sect['.$row["cid"].']" value="'.$row["sect"].'"></td>
                            <td><input class="form-control" type="text" name="cell['.$row["cid"].']" value="'.$row["cell"].'"></td>
                            <td><input class="form-control" type="text" name="distr['.$row["cid"].']" value="'.$row["distr"].'"></td>
                            <td><input class="form-control" type="tel" name="parish['.$row["cid"].']" value="'.$row["parish"].'"></td>
                             <td><input class="form-control" type="text" name="lochurch['.$row["cid"].']" value="'.$row["lochurch"].'"></td>
                            <td><input class="form-control" type="tel" name="tel['.$row["cid"].']" value="'.$row["tel"].'"></td>                            
                                <input type="hidden" name="id[]" value="'.$row["cid"].'">
                            </td>
                            </tr>';}
                    echo'</tbody>
                        </table>
                        
                    </div>';
                echo'<p class="text-center"><input type="submit" name="submit" value="Save CHANGES" class="btn btn-default btn-lg"></p>';
                echo'</form>';}
    ?>
    </body>
    </html>