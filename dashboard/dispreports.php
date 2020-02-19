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
</body>
<?php
include('navigate.php');
?>
<div>
  <br/>
</div>
<div class="tabe-head">
<table><tr><td><a href="index.php">----Back</a></td></tr></table><form action="dispwreport.php" method="POST">
  <?php
  /*include('../connection.php');
   $id=$_REQUEST['d'];
  $r=mysqli_query($conn,"SELECT fname FROM workers WHERE id=$id");  
  if(mysqli_num_rows($r)){ 
  $s=mysqli_fetch_array($r);
eho'<table align="center"><tr>
<td>
    echo" your name is $s";
 
</td></tr>;
</table>';
 }*/
  ?>
  </form></div>
<div class="table-responsive">
            <table border="1" class="table table-striped">
              <thead>
                <tr>
                <th></th>
                  <th>date</th>
                  <th>done by</th>                  
                  <th>post</th>
                  <th>planned activities</th>
                  <th>done avtivies</th>
                  <th>no done activities</th>
                  <th>no planned activities</th>
                  <th>problem</th>
                  <th>suggetions</th>
                  <th>observation</th>                  
                  <th>comment</th>                  
                </tr>
              </thead>
              <tbody>
              <?php
              
               @$search=$_POST['search'];
               $id=$_REQUEST['d'];
                 //if empty($search)
                 //{
                 // echo "please enter somethings to search";
                 //}
                 //else{
                include('../connection.php');
                $Result=mysqli_query( $conn,"select * from reports where id=$id ORDER BY rid DESC");
                 if(mysqli_num_rows($Result)){


                  while($row=mysqli_fetch_array($Result))
                  {

                    @$rids=$row['rid'];
                    $s=$rids;
                    echo '<tr>';  
                    echo'<td><a href="view.php?rid='.$row['rid'].'">view</a></td>';                        
                          echo'<td>'.$row["dates"].'</td>';
                          echo'<td>'.$row["worker"].'</td>';
                          echo'<td>'.$row["post"].'</td>';
                          echo'<td align="center">'.$row["planact"].'</td>';
                          echo'<td>'.$row["doneact"].'</td>';
                          echo'<td>'.$row["nodoneact"].'</td>';
                          echo'<td>'.$row["noplanact"].'</td>';
                          echo'<td>'.$row["prob"].'</td>';
                          echo'<td>'.$row["sugg"].'</td>';
                          echo'<td>'.$row["observ"].'</td>';                          
                          echo'<td>'.$row["comment"].'</td>';
                          
                   
                   // echo  '<td align="center"><p><button class="btn btn-primary">Edit</button><a href="delete3.php?del='.$row["rid"].'" class="btn btn-danger">Delete</a></p>
                      echo '</tr>';
                  }
                }
                  //else
                  //{
                   // echo"not found";
                  //}
                  
              
                ?>                
                
              </tbody>
            </table>
          </div>
          <table border=0 table align="center">
          <tr><td><input type='button' onclick='window.print()' value='Print'></td></tr></table></div>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
          <script src="../../../dist/js/bootstrap.min.js"></script>
          <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
          <script src="../../../assets/js/vendor/holder.min.js"></script>
          <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
          <script src="../../../assets/js/ie10-viewport-bug-workaround.js"></script>
        </body>
</html>