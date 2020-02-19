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
                  <th>Title</th>
                  <th>Message</th>
                  <th>Control</th>
                </tr>
              </thead>
              <tbody>
              <?php
                include('../connection.php');
                $Result=mysqli_query( $conn,"SELECT * FROM programs ORDER BY id DESC;");

                  while($row=mysqli_fetch_array($Result))
                  {
                    echo '
                        <tr>
                          <td>'.$row["id"].'</td><td>'.$row["Title"].'</td>
                          <td>'.$row["Paragraph"].'</td>';
                    echo  '<td><p><button class="btn btn-primary">Edit</button><a href="delete5.php?del='.$row["id"].'" class="btn btn-danger">Delete</a></p>
                        </tr>';
                  }
                ?>
                
              </tbody>
            </table>
          </div>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
          <script src="../../../dist/js/bootstrap.min.js"></script>
          <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
          <script src="../../../assets/js/vendor/holder.min.js"></script>
          <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
          <script src="../../../assets/js/ie10-viewport-bug-workaround.js"></script>
        </body>
</html>