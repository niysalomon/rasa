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
		<title>rasa ur-huye</title>
        <link href="css/main.css" rel="stylesheet">
		<link href="1/thumbs2.css" rel="stylesheet"/>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="1/thumbs2.css" rel="stylesheet" />
		<link href="1/thumbnail-slider.css" rel="stylesheet" type="text/css" />
		<script src="1/thumbnail-slider.js" type="text/javascript"></script>
		<link href="3/ninja-slider.css" rel="stylesheet" />
    	<script src="3/ninja-slider.js"></script>
        <link href="3/thumbnail-slider.css" rel="stylesheet" type="text/css" />
		<script src="3/thumbnail-slider.js" type="text/javascript"></script>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<link href="main.css" rel="stylesheet" type="text/css">
		<style>
		   li.anotherOne ul div ul { position:absolute; left:50%; background-color:#fff; width:120%; list-style:none; padding:0 0 0 20%; visibility:hidden;}
		   li.anotherOne ul div:hover ul {visibility:visible;}
		</style>
		
	</head>

	<body style="background-color:black;">
		<div class="container" style="background-color:white;">
            <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
				<div class="row">
					<!--Here-->
					<?php
include_once('menu_bowaz.php');
?>
					
					<!--colunm1-->
					<div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
					<div class="container-fluid">
								<!--panel1-->
							<div class="row">
								<div class="panel pcolor">
									<div class="panel-heading text-center">
										<b><em>RANGURURA & BOWAZ Videos</em></b>
									</div>
									
									<div class="panel-body">
										<div class="embed-responsive embed-responsive-16by9">
										<iframe class="embed-responsive-item" src="viewvids.php"></iframe>
									</div>
									</div>
									<div class="panel-body">
										<div class="col-md-6 pull-right">
											<h2 class="text-center">RANGURURA & BOWAZ</h2>
											<hr align="center" style="width:80%;color:black" />
											<?php
												$pipsql = mysqli_query($conn,'SELECT * FROM videos WHERE CATEGORIE="RANGURURA & BOWAZ" ORDER BY id DESC LIMIT 0,5');
												while($myrow = mysqli_fetch_array($pipsql)){
												echo'<div class="media">
													<div class="media-right">
														<a href="showvids.php?hdfjafreuruqifhjak='.$myrow['Id'].'&hdfjafreuruqifhj='.$myrow['year'].'">
														<img class="media-object" src="'.$myrow['icon_url'].'" width="100px" height="100px" alt="NO PICTURE">
														</a>
													</div>
													<div class="media-body">
														<a href="showvids.php?hdfjafreuruqifhjak='.$myrow['Id'].'&hdfjafreuruqifhj='.$myrow['year'].'">
															<h4 class="media-heading text-center">'.$myrow['name'].'</h4>
														</a>
													</div>
												</div>';
												}
											?>
										</div>

										<div class="col-md-6 pull-left">
											<h2 class="text-center">TEHILLAH & HALLAL</h2>
											<hr align="center" style="width:80%;color:black" />
											<?php
												$pipsql = mysqli_query($conn,'SELECT * FROM videos WHERE CATEGORIE="TEHILLAH & HALLAL" ORDER BY id DESC LIMIT 0,5');
												while($myrow = mysqli_fetch_array($pipsql)){
												echo'<div class="media">
													<div class="media-right">
														<a href="showvids.php?hdfjafreuruqifhjak='.$myrow['Id'].'&hdfjafreuruqifhj='.$myrow['year'].'">
														<img class="media-object" src="'.$myrow['icon_url'].'" width="100px" height="100px" alt="NO PICTURE">
														</a>
													</div>
													<div class="media-body">
														<a href="showvids.php?hdfjafreuruqifhjak='.$myrow['Id'].'&hdfjafreuruqifhj='.$myrow['year'].'">
															<h4 class="media-heading text-center">'.$myrow['name'].'</h4>
														</a>
													</div>
												</div>';
												}
											?>
										</div>
									</div>

									<div class="embed-responsive embed-responsive-16by9">
										<iframe class="embed-responsive-item" src="viewpics.php"></iframe>
									</div>
							</div>
							</div>
					</div>
					</div>
					<!--colunm3-->
					<?php
						include("aside.php");
					?>
			</div>
			
			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 color">
			<?php
				include('footer.php');
			?>
            </div>
		</div>
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script scr="js/bootstrap.min.js"></script>
	</body>
</html>
