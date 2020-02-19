<!DOCTYPE html>
<?php
/*
  session_start();
  $let=isset ($_SESSION['name']);
  if($let){
	  session_destroy();
  }*/
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>rasa</title>
        <link href="css/main.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles1.css" rel="stylesheet">
		<link href="3/ninja-slider.css" rel="stylesheet" />
    	<script src="3/ninja-slider.js"></script>
        <link href="3/thumbnail-slider.css" rel="stylesheet" type="text/css" />
		<script src="3/thumbnail-slider.js" type="text/javascript"></script>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<link href="main.css" rel="stylesheet" type="text/css">
		 <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- ANIMATE  CSS -->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!-- PRETTY PHOTO  CSS -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <!--  STYLE SWITCHER CSS -->
    <link href="assets/css/styleSwitcher.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!--PINK STYLE VERSION IS BY DEFAULT, USE ANY ONE STYLESHEET FROM FOUR STYLESHEETS (pink,green,blue and brown) HERE-->
    <link href="assets/css/themes/pink.css" id="mainCSS" rel="stylesheet" />
		
		
	</head>

	<body style="background-color:#ffffff;">
<?php
include_once('rasamenu.php');
?>
		<!-- CODES TO MAKE JUMBOTRON I.E LARGE TEXT OR ANY OTHER INFORMATION header image -->
		
	<div class = "container">		
     <div class="row">
	<div class="col-lg-8">
	<div class = "panel panel-default"  >
	<div class="panel-body">
	<div class="page-header">
   rasa nyarugenge campus
    <form class="navbar-form navbar-right" role="search"  action="searcho.php" method="get">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search videos" name="search videos" required>
										</div>
										<input class="btn btn-danger" type="submit" class="btn btn-default" id="search_form" value="Search"/>
									</form>	
	</div>
	
               	
           

<h4>Choirs's Videos</h4>
<p>
						<div class="panel-body" >
										<?php
											include('connection.php');
											$pipsql = mysqli_query($conn,"SELECT * FROM videos ORDER BY Id DESC");
											$count = 0;
											$class = 'item active';
											$pics = array("","","","","");
											$Name = array("","","","","");
											$year = array("","","","","");
											$IDs = array("","","","","");
											$Choir = array("","","","","");
											$Vids = array("","","","","");
											$Categorie = array("","","","","");
											while(($myrow = mysqli_fetch_array($pipsql))&&($count<10))
											{$pics[$count] = $myrow["icon_url"]; $Name[$count] = $myrow["name"];
											$IDs[$count] = $myrow["Id"]; $year[$count] = $myrow["year"];
											$Choir[$count] = $myrow["categorie"];
											$Vids[$count] = $myrow["Video_Url"];
											$Categorie[$count] = $myrow["categorie"];
											$count++;}
											echo'
												<!--start-->
													<div style="width:100%;margin:auto;" class="desiGN bigScreen">
														<div id="ninja-slider" style="height:auto;width:80%;float:left;">
															<div class="slider-inner">
																<ul>';
											for($iii=0;$iii<5;$iii++)
														echo'<li>
																<h3 class="slide_tit">
																	<a href="showvids.php?salo='.$IDs[$iii].'&sal='.$year[$iii].'">
																		<p style="color:gray;text-align:center">'.$Name[$iii].'</p>
																</a>
																</h3>
																<a class="ns-img" href="'.$pics[$iii].'"></a>
																</li>';
														echo '</ul>
															<div class="fs-icon" title="Expand/Close"></div>
														</div>
														</div>
													<div id="thumbnail-slider" style="width:20%; height:30%; float:right;">
														<div class="inner">
														<ul>';
												for($ii=0;$ii<10;$ii++)
														echo '<li><a class="thumb" href="'.$pics[$ii].'"></a></li>';
												echo'
											
										</ul>
										</div>
									</div>
									<div style="clear:both;"></div>
								</div>
												
												';
										?>
										</div>
								
							           <div class="panel-body">
										<div class="col-md-6 ">
											<small><b class="text-center">CHOIRS OF EAR BYUMBA</b></small>
											<hr align="center" style="width:80%;color:black" />
											<?php
												$pipsql = mysqli_query($conn,'SELECT * FROM videos WHERE CATEGORIE="choir" ORDER BY id DESC LIMIT 0,10');
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

										<div class="col-md-6 pull-left">
											<small><b class="text-center">EVENTS IN EAR BYUMBA</b></small>
											<hr align="center" style=" margin-right:0px;width:80%;" />
											<?php
												$pipsql = mysqli_query($conn,'SELECT * FROM videos WHERE CATEGORIE="event" ORDER BY id DESC LIMIT 0,10');
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
									</div>
									
									
									<div class="panel-body">
									<h4 class="page-header text-center">Pictures</h4>
										<p class="text pull-left" style="margin-left:0px">
											<a href="morePics.php" class="btn btn-success pull-left">View more pictures</a>
										</p><br /><br /><br /><br />
										<div class="embed-responsive embed-responsive-16by9">
											<iframe style="margin-bottom:0px;" class="embed-responsive-item" src="viewpics.php"></iframe>
										</div>
									</div>
								
</p>
	</div>
	
	</div>
	</div>
	
	<div class="col-lg-4">
	<p>
	<?php
	include("aside.php");
	?>
	</p>
	</div>

</div>
</div>

<!-- ============FOOTER CODES START======================= -->
	<?php
	include('footer.php');
	?>
	
<!-- =======FOOTER CODES END HERE =================  -->
					<!-- MENU ENDED HERE  and header image-->
					
  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script scr="js/bootstrap.min.js"></script>
	</body>
</html>