<!DOCTYPE html>
<?php
  session_start();
  if (!isset($_SESSION["name"])) {
    header("location: ../index.php"); 
    exit();}
  
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Add News</title>

    <!-- Bootstrap core CSS -->
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

  
<?php
       include('navigation4.php');
    ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">            
            <li class="active"><a href="NvidsEmbed.php">Embed New video</a></li>
             <li><a href="postouv.php">Group,organisation&Districts</a></li>
            <li><a href="Nchoirs.php">Post photoes</a></li>   
            <li><a href="post.php">News</a></li>
            <li><a href="Newspics.php">News photoes</a></li>
           <li><a href="../regchristian.php">Insert Christians</a></li>           
            <li><a href="Nprograms.php">Post New Programs</a></li>
            <li><a href="Npubs.php">Post Publicity Images</a></li>                      
            <li><a href="Nvids.php">Post New Videos</a></li>
            <li ><a href="diofile.php">Diocese Documents</a></li>
             <li><a href="Nfile.php">Post file</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Embed new video</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>NEW</h4>
              <span class="text-muted">POST NEW VIDEO</span>
            </div>
          </div>

          <h2 class="sub-header">
            <?php 
            echo $_SESSION['name'];
            ?>
          </h2>
          <div>
  <form method="post" enctype="multipart/form-data" action='NvideoEmb.php' >
    <input type="text" class="form-control" name="name" placeholder="Name" required>
    <br />
    <b class="color2"> Choirs:</b><br />
    <select class="form-control" name="categorie">
    <option></option>
    <option>RANGURURA & BOWAZ</option>
    <option>TEHILLAH & HALLAL</option>
    </select>
    <br />
    <b class="color2"> Year: </b><br />
    <select class="form-control" name="year">
    <option><?php
      for($karr = 2000; $karr<2030; $karr++)
         echo "<option>$karr</option>";
    ?></option>
    </select>
    <br />
   <!-- <input type="hidden" name="MAX_FILE_SIZE" value="2000000000000" />-->
    <b> Embed video:</b>
     <input type="text" placeholder="paste video Url here" class="form-control" name="urlEmbed"/>
     
     <br />
     <!--<input type="file" placeholder="categorie" class="btn btn-link pcolor" name="icon" required/>
     <input type="text" value="<?php echo $from;?>" name="from" style="visibility:hidden;"/> -->
     <input type="submit" class="btn btn-link color" value="Embed your video" name="okk"/>
   </form>
   <?php
   include('../connection.php');
   if(isset($_POST['okk'])){
   $name = $_POST["name"];
   $category  = $_POST["categorie"];
   $year = $_POST["year"];
   $vurl = $_POST["urlEmbed"];
   $icon = "no icone";
   $sql = "INSERT INTO videos VALUES('','$name','$category','$year','$vurl','$icon')";
  $sqll = mysqli_query($conn,$sql);
if($sqll){
    echo 'success';
  }else{
    echo 'failed';
  }

}
   ?>

</body>
</html>