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
if(isset($_POST["submit"])){
        foreach ($_POST["id"] AS $id){
                            /*echo 'ID is ' .$id.'<br />';
                            echo 'Field1 is ' .$_POST["field1"][$id].'<br />';
                            echo 'Field2 is ' .$_POST["field2"][$id].'<br />';*/
                            $field1= mysqli_real_escape_string($conn,$_POST["fields"][$id]);                          
                            $field2 = mysqli_real_escape_string($conn,$_POST["paragraph"][$id]);
                            $field3 = mysqli_real_escape_string($conn,$_POST["dates"][$id]);
                            $update="UPDATE `postall` 
                            SET `fields` = '$field1', `paragraph` = '$field2', `dates` = '$field3'
                            WHERE `id` = $id LIMIT 1 ";
                            mysqli_query($conn,$update) or die (msqli_error());
                        }
}
$sql="SELECT * FROM postall ORDER BY id DESC";
			$res=mysqli_query($conn,$sql);
			if(!$res)
			{
				die("Query Failed!");
			}
            if( mysqli_num_rows($res) > 0){
				echo '<form method="post" action="Editable5.php" enctype="multipart/form-data">';
				
                echo '
                    <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Fields</th>                            
                            <th>paragraph</th>
                            <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>';
                while($row=mysqli_fetch_assoc($res)){
                    echo'
                            <tr>
                            <td>'.$row["id"].'</td>
                            <td><input class="form-control" type="text" name="fields['.$row["id"].']" value="'.$row["fields"].'"></td>                           
                            <td><textarea cols="60" rows="10" class="form-control" type="text" name="paragraph['.$row["id"].']" value="'.$row["paragraph"].'">'.$row["paragraph"].'</textarea></td>
                            <td><input class="form-control" type="text" name="dates['.$row["id"].']" value="'.$row["dates"].'"></td>
                                <input type="hidden" name="id[]" value="'.$row["id"].'">
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