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
<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Video</th>
                  <th>Title</th>
                  <th>Choir</th>
                  <th>Control</th>
                </tr>
              </thead>
              <tbody>
              <?php
                include('../connection.php');
                $Result=mysqli_query( $conn,"SELECT * FROM videos ORDER BY id DESC;");

                  while($row=mysqli_fetch_array($Result))
                  {
                    echo "
                        <tr>
                          <td>".$row['Id']."</td>
                          <td><img style='height:150px;width:150px' src='../".$row['icon_url']."'/></td>
                          <td>".$row['name']."</td>
                          <td>".$row['categorie']."</td>";
                    echo  '<td><p><a href="delete7.php?del='.$row["Id"].'" class="btn btn-danger">Delete</a></p></td>
                        </tr>';
                  }
                ?>
                
              </tbody>
            </table>
          </div>
</body>
</html>