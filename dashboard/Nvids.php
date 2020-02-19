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

  <body>

    <?php
       include('navigation4.php');
    ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Post New Videos<span class="sr-only">(current)</span></a></li>
             <li><a href="postouv.php">publish group&organisation</a></li>
             <li><a href="post1.php">News</a></li>
             <li><a href="Nnewspics.php">Newsphotoes</a></li>
            <li><a href="Nprograms.php">Post New Programs</a></li>
            <li><a href="Npubs.php">Post Publicity Images</a></li>
            <li><a href="Nchoirs.php">Post new photoes</a></li>         
            <li ><a href="NvideoEmb.php">Embed New video</a></li>
             <li><a href="Nfile.php">Post public files</a></li>
             <li><a href="diofile.php">Post Diocese Documents</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Post News</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Title</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

          <h2 class="sub-header">
            <?php 
            echo $_SESSION['name'];
            ?>
          </h2>
           <?php
   $var = isset($_POST['okk']);
   if($var) 
   {
     $NAME = $_POST['name'];
     $CATEGORIE = $_POST['categorie'];
	 $nAME2 = date('h').date('y').date('n').date('sa').'__'.(7+date('h')).(date('y')+7).(date('n')+7).(date('sa')+7);
     $YEAR = $_POST['YEAR'];
     include('../connection.php');
	 $targetFolder = "../img/vids/";
	 $_url = "img/";
     $_Url = "img/vids/";
	 $targetFolder2 = $targetFolder.$NAME.$nAME2.'__rasa.mp4';
	 $default_url = $_Url.$NAME.$nAME2.'__rasa.mp4';
	 $default_url2 = $_url.$NAME.$nAME2.basename($_FILES['icon']['name']);
	 $default_url3 = "../img/".$NAME.$nAME2.basename($_FILES['icon']['name']);
	 $sitiuation = move_uploaded_file($_FILES['files']['tmp_name'],$targetFolder2);
	 if(!$sitiuation)
	 {
	   echo "Wapi bya Failinz";
	 }
	 $sitiuation = move_uploaded_file($_FILES['icon']['tmp_name'],$default_url3);
	 if(!$sitiuation)
	 {
	   echo "Wapi bya Failinz";
	 }
	 else { mysqli_query($conn,"INSERT INTO videos(name,categorie,year,Video_Url,icon_url) VALUES('$NAME','$CATEGORIE','$YEAR','$default_url','$default_url2')");}
	 
	 /*echo "<pre>" ;
		echo "POST:";
		print_r($_POST);
		echo "FILES:";
		print_r($_FILES);
		echo "</pre>";*/
	  
   }
   
 ?>
 <div>
	<form method="post" enctype="multipart/form-data" action='Nvids.php' >
	  <input type="text" class="form-control" name="name" placeholder="Name" required>
	  <br />
	  <b class="color2">Owner:</b><br />
    <input type="text"class="form-control"name="cathegorie">	  
	  <br />
	  <b class="color2"> Year: </b><br />
	  <select class="form-control" name="YEAR">
		<option><?php
			for($karr = 2000; $karr<2030; $karr++)
			   echo "<option>$karr</option>";
		?></option>
	  </select>
	  <br />
	  <input type="hidden" name="MAX_FILE_SIZE" value="2000000000000" />
	  <b> upload a video:</b>
	   <input type="file" placeholder="categorie" class="btn btn-link pcolor" name="files"/>
	   <input type="text" class="form-control" name="url_video"  placeholder="video url" value="jay" style="visibility:hidden;"/><br />
	   <input type="file" placeholder="categorie" class="btn btn-link pcolor" name="icon" required/>
	   <input type="text" value="<?php echo $from;?>" name="from" style="visibility:hidden;"/>
	   <input type="submit" class="btn btn-link color" value="Upload your video" name="okk"/>
   </form>
</div>
        </div>
      </div>
    </div>

    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
