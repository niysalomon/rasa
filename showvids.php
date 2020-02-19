<!DOCTYPE html>
<?php
  session_start();
  $let=isset ($_SESSION['name']);
  if($let){
	  session_destroy();
  }
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
        <link href="css/main.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles1.css" rel="stylesheet">
		<link href="3/ninja-slider.css" rel="stylesheet" />
    	<script src="3/ninja-slider.js"></script>
        <link href="3/thumbnail-slider.css" rel="stylesheet" type="text/css" />
		<script src="3/thumbnail-slider.js" type="text/javascript"></script>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<link href="main.css" rel="stylesheet" type="text/css">
		<style>
		   li.anotherOne ul div ul { position:absolute; left:50%; background-color:#fff; width:120%; list-style:none; padding:0 0 0 20%; visibility:hidden;}
		   li.anotherOne ul div:hover ul {visibility:visible;}
		</style>
		
	</head>

	<body style="background-color:#c1c1c1;">
<div class="container">
            <div class="row">
			<div class="col-md-16 col-sm-16 col-xs-16 col-lg-16">
				<div class="row">
					<!--Here-->
					<div class="navbar navbar-inverse navbar-static-top">
		  <div class="container">
		    <a href="index.php" class="navbar-brand"> </a>	
   <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   </button>   
            
               <?php
               include('rasamenu.php');
               ?>
               			
            			
          </div>		
		</div>
		</div>
		</div>
		</div>
		</div>
		<!-- CODES TO MAKE JUMBOTRON I.E LARGE TEXT OR ANY OTHER INFORMATION header image -->
		
	
	<div class="col-md-16">
	<div class = "panel panel-default"  >
	<div class="panel-body">
	<div class="page-header">
	<form class="navbar-form navbar-right" role="search"  action="searcho.php" method="get">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search a videos" name="search" required>
										</div>
										<input class="btn btn-danger" type="submit" class="btn btn-default" id="search_form" value="Search"/>
									</form>	
	</div>
	
	

<h6>Click Play Button To Play Videos</h6>
<hr />

	
	<div class="col-md-8">
						<div style="display:table-cell;padding: 0px 0px 0 0px;height:60px;width:50%; margin-left:50px; ">
							<video controls loop>
							<?php
							include('connection.php');
												
								if(isset($_REQUEST['salo']))
								{$loop = $_REQUEST['salo'];
								$pipsql = mysqli_query($conn,"SELECT * FROM videos WHERE id=$loop");
								$bool = true;}
								else if(isset($_REQUEST['sal']))
								{ $loop = $_REQUEST['sal'];
								$pipsql = mysqli_query($conn,"SELECT * FROM videos WHERE year=$loop");
								$bool = false;}
								else if(isset($_POST['okk']))
								{ $loop = $_POST['hidethis'];
								$pipsql = mysqli_query($conn,"SELECT * FROM videos WHERE id=$loop");
								$bool = true;
								}
							while($myrow = mysqli_fetch_array($pipsql))
								
							{
								$ext=mp4;
								echo'<source src="'.$myrow["Video_Url"].'" type="video/mp4" style="padding-left:20px;padding-right:20px; margin-left:20px;">
									Video is not supported by your browser';
							}
							?>
							</video>
						</div>
					</div>
					


										<div class="col-md-4">
											<small><b class="text-center">VIDEOS </b></small>
											<hr align="center" style="width:80%;color:black" />
											<?php
												$pipsql = mysqli_query($conn,'SELECT * FROM videos  ORDER BY id DESC LIMIT 0,10');
												while($myrow = mysqli_fetch_array($pipsql)){
												echo'<div class="media">
													<div class="media-right">
														<a href="showvids.php?salo='.$myrow['Id'].'&sal='.$myrow['name'].'">
														<img class="media-object" src="'.$myrow['icon_url'].'" width="100px" height="100px" alt="NO PICTURE">
														</a>
													</div>
													<div class="media-body">
														<a href="showvids.php?salo='.$myrow['Id'].'&sal='.$myrow['name'].'">
															<h4 class="media-heading text-center">'.$myrow['name'].'</h4>
														</a>
													</div>
												</div>';
												}
											?>
											</div>
											</p>
										</div>


										
									</div>
									</div>
									</div>
									
									</div>
	
	

	

<!-- ============FOOTER CODES START======================= -->

	<?php
	include('footer.php');
	?>
	
<!-- =======FOOTER CODES END HERE =================  -->
            
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script scr="js/bootstrap.min.js"></script>
	</body>
</html>
