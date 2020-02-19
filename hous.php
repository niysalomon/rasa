
<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>>
<div class="container">
                      <!-- PUT SOMETHING IN THIS ROW -->
					<div class="row">
					<div class="col-md-6" >
					<div class = "panel panel-default">
					<div class="panel-body">	
					
					
							
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
											$pipsql = mysqli_query($conn,'SELECT * FROM news ORDER BY id DESC LIMIT 0,5');
											$count = 0;
											$class = 'item active';
											while(($myrow = mysqli_fetch_array($pipsql))&&($count<5))
											  {
											  
											if($count > 0)
											  $class = 'item';
											    echo '<div class="'.$class.'">
												        <a href="Newsdisplay.php?salo='.$myrow["id"].'&sal='.$myrow["Title"].'"><img src="'.$myrow["Image"].'" width="100%" style="height:auto;"></a>
														<div class="carousel-caption">
														    <a href="Newsdisplay.php?salo='.$myrow["id"].'&sal='.$myrow["Title"].'"><h4 style="color:#ffffff">'.$myrow["Title"].'</h4></a>
												        </div>
											          </div>
													  
													  ';
												$count ++;  
											  }
										   ?>
										</div>
											<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
											<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span>
										</a>
										
										<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
											<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span>
										</a>
										</div>