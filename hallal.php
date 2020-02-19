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
		<link href="css/bootstrap.min.css" rel="stylesheet">
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
                        include('navigation.php');
                    ?>
					
					<!--colunm1-->
					<div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
					<div class="container-fluid">
								<!--panel1-->
							<div class="row">
								<div class="panel pcolor">
									<div class="panel-heading text-center">
										<b><em>TEHILLAL & HALLAL Videos</em></b>
									</div>
									
									<div class="panel-body">
										<div class="row">
													<!--carousel-->
											<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
													<!--Indicators-->
												<ol class="carousel-indicators">
													<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
													<li data-target="#carousel-example-generic" data-slide-to="1"></li>
													<li data-target="#carousel-example-generic" data-slide-to="2"></li>
													<li data-target="#carousel-example-generic" data-slide-to="3"></li>
													<li data-target="#carousel-example-generic" data-slide-to="4"></li>
												</ol>
													<!--Head News-->
												<div class="carousel-inner" role="listbox">
												<?php
												include('connection.php');
													$pipsql = mysqli_query($conn,'SELECT * FROM videos WHERE CATEGORIE="Hallal" ORDER BY id DESC LIMIT 0,5');
													$count = 0;
													$class = 'item active';
													while(($myrow = mysqli_fetch_array($pipsql))&&($count<5))
													{
													
													if($count > 0)
													$class = 'item';
														echo '<div class="'.$class.'">
																	<a href="showvids.php?hdfjafreuruqifhjak='.$myrow["Id"].'&hdfjafreuruqifhj='.$myrow["year"].'">
																		<img src="'.$myrow['icon_url'].'" width="100%" style="height:450px">
																	</a>
																	<div class="carousel-caption">
																		<a href="showvids.php?hdfjafreuruqifhjak='.$myrow["Id"].'&hdfjafreuruqifhj='.$myrow["year"].'">
																			<h4 style="color:#ffffff">'.$myrow["name"].'</h4>
																		</a>
																	</div>
															</div>
															
															';
														$count ++;  
													}
												?>
												</div>
													<!--control carousel-->
												<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
													<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span>
												</a>
												
												<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
													<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span>
												</a>
											</div>
										</div>
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
