<!DOCTYPE html>
<?php
  /*session_start();
  $let1=isset($_SESSION['name']);
  if($let1){
	  session_destroy();
  }
  if(isset($_GET['log'])){
	  $_SESSION['user'];
	  session_destroy();
	  echo "<meta http-equiv='refresh' content='0;url=index.php'>";
  }*/
?>
<?php
include('connection.php');
$dates=date("d/m/Y");
mysqli_query($conn,"INSERT INTO views(id,dates) VALUES (NULL,'$dates')");
?>
<html lang="en" >
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" c ontent="width=device-width, initial-scale=1.0">
		<title>ear byumba</title>
        <link href="css/main.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<link href="main.css" rel="stylesheet" type="text/css">
		
		<style>
		   li.anotherOne ul div ul { position:absolute; left:50%; background-color:#999999; width:120%; list-style:none; padding:0 0 0 20%; visibility:hidden;}
		   li.anotherOne ul div:hover ul {visibility:visible;}
		</style>
		<link rel="shortcut icon" href="earlogo.PNG"/>
	</head>

	<body style="background-color:#A7CFEC;">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script scr="js/bootstrap.min.js"></script>
	<!--<table class="tab"><tr><td>-->
 		
		
		<!-- CODES TO MAKE JUMBOTRON I.E LARGE TEXT OR ANY OTHER INFORMATION header image -->
		
	<div class = "container">	   	
     <div class="row">    
	<div class="col-lg-12">
	  <?php
   include_once('menu_mission.php');
   ?>
		
               	<form class="navbar-form navbar-right" role="search"  action="search.php" method="get">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search late news" name="search" required>
										</div>
										<input class="btn btn-danger" type="submit" class="btn btn-default" id="search_form" value="Search"/>
									</form>	
             
	<img class="featureImg" src="images/rasa_logos.pn');
   ?>	
	<div class = "panel panel-default">
	<div class="panel-body">
	g" alt="log not found" width="100%" />
	</div>
	
	
	

					<!-- MENU ENDED HERE  and header image-->
					
<!-- ============================================colom 1 start============================================================================================ -->

<div class="container">
                      <!-- PUT SOMETHING IN THIS ROW -->
					<div class="row">
					<div class="col-md-6" >
					<div class = "panel panel-default">
					<div class="panel-body">
					
					<h4 class="navbar-text panel-heading text-center page-header">Recent News</h4>
					
							
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
										
										</div>
										<!-- END OF PANEL -->
										
										
										
										
										<!-- ================== Next Row start For Other News ========================= -->
										
										  	<div class="panel-body">
							<?php
											$pipsql = mysqli_query($conn,"SELECT * FROM news ORDER BY id DESC LIMIT 6,13");
											while($myrow = mysqli_fetch_array($pipsql))
											{
                                echo '<div class="media">
                                    <div class="media-left media-middle">
                                        <a href="Newsdisplay.php?salo='.$myrow["id"].'&sal='.$myrow["Title"].'">
                                            <img src="'.$myrow["Image"].'" alt="No image" width="120px" height="120px" class="margin-right"/>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="Newsdisplay.php?salo='.$myrow["id"].'&sal='.$myrow["Title"].'" >'.$myrow["Title"].'</a></h4>
                                        <p>'.$myrow["Resume"].'</p>
										<p align="right">Posted at '.$myrow["date"].'<a href="Newsdisplay.php?salo='.$myrow["id"].'&sal='.$myrow["Title"].'" class="btn btn-link">Read More</a></p>
                                    </div>
                                </div>';
											}
											?>

				     </div>		 
					</div>
										</div>

										
				<div class="col-lg-6" style="margin-right:0px;">
				<div class="col-md-9 col-sm-9 col-xs-9 col-lg-9"> <div class="panel">
                                    <div class="row">
                                    <div class="panel-body pcolor" >
                                    <?php 
                                        include('login.php');
                                    ?>
									</div>
                                    
                                    <div class="panel-heading text-center">
                                    
                                    <lebel><h4><b><u>Communication</u></b></h4></lebel>
                                    </div>
                                    <?php
                                    include('connection.php');
                                                                       
                                    $res=mysqli_query($conn,"SELECT*FROM communication ORDER BY id DESC LIMIT 0,5");
                                    while($resi=mysqli_fetch_array($res))
                                    {
                                        echo'<div class="panel-body">
                                        
                                        <h6><a href="dispcomm.php?dd='.$resi["id"].'"></h6>
                                        <label>→'.$resi["resume"].'</lebel></a>';
                                    }                                    
                                    ?>
                                    </div>
                                    </div>
                                    
                                  
                                    
                                     
                                            <div class="panel-heading text-center">
                                                <h4>Week Programs</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="panel-group" id="accordion" role="tablist" aria-multiline="true">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingOne">
                                                            <div class="row" style="padding-left:10px; padding-right:10px"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                <div class="pull-left"><h3 class="panel-title">Monday</h3></div>
                                                                <div class="pull-right"><span class="badge"><span class="glyphicon glyphicon-list"></span></span></div>
                                                            </a></div>
                                                        </div>

                                                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="panel-body">
                                                            <?php
                                                                include('connection.php');
                                                                $pipsql = mysqli_query($conn,"SELECT * FROM programs WHERE Day='Monday' ORDER BY id DESC LIMIT 0,4");
                                                                    while($myrow = mysqli_fetch_array($pipsql)){
                                                                        
                                                                        echo'
                                                                            <hr /><h4 class="media-heading text-center">'.$myrow["Title"].'</h4>
                                                                            <p align="left">'.$myrow["Paragraph"].'</p><p align="right">Posted at: '.substr($myrow["date"],11,18).'</p>
                                                                        ';
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingTwo">
                                                            <div class="row" style="padding-left:10px; padding-right:10px"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                <div class="pull-left"><h4 class="panel-title">Tuesday</h4></div>
                                                                <div class="pull-right"><span class="badge"><span class="glyphicon glyphicon-list"></span></span></div>
                                                            </a></div>
                                                        </div>

                                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                            <div class="panel-body">
                                                                <?php
                                                                $pipsql = mysqli_query($conn,"SELECT * FROM programs WHERE Day='Tuesday' ORDER BY id DESC LIMIT 0,4");
                                                                    while($myrow = mysqli_fetch_array($pipsql)){
                                                                        
                                                                        echo'
                                                                            <hr /><h4 class="media-heading text-center">'.$myrow["Title"].'</h4>
                                                                            <p align="left">'.$myrow["Paragraph"].'</p><p align="right">Posted at: '.substr($myrow["date"],11,18).'</p>
                                                                        ';
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingThree">
                                                            <div class="row" style="padding-left:10px; padding-right:10px"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                <div class="pull-left"><h4 class="panel-title">Wednesday</h4></div>
                                                                <div class="pull-right"><span class="badge"><span class="glyphicon glyphicon-list"></span></span></div>
                                                            </a></div>
                                                        </div>

                                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                            <div class="panel-body">
                                                                <?php
                                                                $pipsql = mysqli_query($conn,"SELECT * FROM programs WHERE Day='Wednesday' ORDER BY id DESC LIMIT 0,4");
                                                                    while($myrow = mysqli_fetch_array($pipsql)){
                                                                        
                                                                        echo'
                                                                            <hr /><h4 class="media-heading text-center">'.$myrow["Title"].'</h4>
                                                                            <p align="left">'.$myrow["Paragraph"].'</p><p align="right">Posted at: '.substr($myrow["date"],11,18).'</p>
                                                                        ';
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingFour">
                                                            <div class="row" style="padding-left:10px; padding-right:10px"><a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                <div class="pull-left"><h4 class="panel-title">Thursday</h4></div>
                                                                <div class="pull-right"><span class="badge"><span class="glyphicon glyphicon-list"></span></span></div>
                                                            </a></div>
                                                        </div>

                                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                            <div class="panel-body">
                                                                <?php
                                                                $pipsql = mysqli_query($conn,"SELECT * FROM programs WHERE Day='Thursday' ORDER BY id DESC LIMIT 0,4");
                                                                    while($myrow = mysqli_fetch_array($pipsql)){
                                                                        
                                                                        echo'
                                                                            <hr /><h4 class="media-heading text-center">'.$myrow["Title"].'</h4>
                                                                            <p align="left">'.$myrow["Paragraph"].'</p><p align="right">Posted at: '.substr($myrow["date"],11,18).'</p>
                                                                        ';
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingFive">
                                                            <div class="row" style="padding-left:10px; padding-right:10px"><a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                                <div class="pull-left"><h4 class="panel-title">Friday</h4></div>
                                                                <div class="pull-right"><span class="badge"><span class="glyphicon glyphicon-list"></span></span></div>
                                                            </a></div>
                                                        </div>

                                                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                                            <div class="panel-body">
                                                                <?php
                                                                $pipsql = mysqli_query($conn,"SELECT * FROM programs WHERE Day='Friday' ORDER BY id DESC LIMIT 0,4");
                                                                    while($myrow = mysqli_fetch_array($pipsql)){
                                                                        
                                                                        echo'
                                                                            <hr /><h4 class="media-heading text-center">'.$myrow["Title"].'</h4>
                                                                            <p align="left">'.$myrow["Paragraph"].'</p><p align="right">Posted at: '.substr($myrow["date"],11,18).'</p>
                                                                        ';
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingSix">
                                                            <div class="row" style="padding-left:10px; padding-right:10px"><a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                                <div class="pull-left"><h4 class="panel-title">Saturday</h4></div>
                                                                <div class="pull-right"><span class="badge"><span class="glyphicon glyphicon-list"></span></span></div>
                                                            </a></div>
                                                        </div>

                                                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                                            <div class="panel-body">
                                                                <?php
                                                                $pipsql = mysqli_query($conn,"SELECT * FROM programs WHERE Day='Saturday' ORDER BY id DESC LIMIT 0,4");
                                                                    while($myrow = mysqli_fetch_array($pipsql)){
                                                                        
                                                                        echo'
                                                                            <hr /><h4 class="media-heading text-center">'.$myrow["Title"].'</h4>
                                                                            <p align="left">'.$myrow["Paragraph"].'</p><p align="right">Posted at: '.substr($myrow["date"],11,18).'</p>
                                                                        ';
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingSeven">
                                                            <div class="row" style="padding-left:10px; padding-right:10px"><a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                                <div class="pull-left"><h4 class="panel-title">Sunday</h4></div>
                                                                <div class="pull-right"><span class="badge"><span class="glyphicon glyphicon-list"></span></span></div>
                                                            </a></div>
                                                        </div>

                                                        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                                            <div class="panel-body">
                                                                <?php
                                                                $pipsql = mysqli_query($conn,"SELECT * FROM programs WHERE Day='Sunday' ORDER BY id DESC LIMIT 0,4");
                                                                    while($myrow = mysqli_fetch_array($pipsql)){
                                                                        
                                                                        echo'
                                                                            <hr /><h4 class="media-heading text-center">'.$myrow["Title"].'</h4>
                                                                            <p align="left">'.$myrow["Paragraph"].'</p><p align="right">Posted at: '.substr($myrow["date"],11,18).'</p>
                                                                        ';
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   
									
							<br />
									<div class="panel pcolor text-center">
										<div class="panel-heading">
											<b><em>Advertise!</em></b>
										</div>
										<div class="row">
										<div class="panel-body">
										<?php
										$pipsql = mysqli_query($conn,"SELECT * FROM pubs ORDER BY id DESC LIMIT 0,4");
											while($myrow = mysqli_fetch_array($pipsql))
												echo'<a class="thumbnail">
												<img class="img-responsive" src="img/'.$myrow["image"].'" alt="...">
												</a>';
										?>
										</div>
										</div>
									</div>
						
					
										<?php
											$pipsql = mysqli_query($conn,"SELECT * FROM news ORDER BY id DESC LIMIT 14,15");
											while($myrow = mysqli_fetch_array($pipsql))
											{
                                echo '<div class="panel-body">
                                    <div class="media-left media-middle">
                                        <a href="Newsdisplay.php?salo='.$myrow["id"].'&sal='.$myrow["Title"].'">
                                            <img src="'.$myrow["Image"].'" alt="No image" width="120px" height="120px" class="margin-left"/>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="Newsdisplay.php?salo='.$myrow["id"].'&sal='.$myrow["Title"].'" >'.$myrow["Title"].'</a></h4>
                                        <p>'.$myrow["Resume"].'</p>
										<p align="right">Posted at '.$myrow["date"].'<a href="Newsdisplay.php?salo='.$myrow["id"].'&sal='.$myrow["Title"].'" class="btn btn-link">Read More</a></p>
                                    </div>
                                </div>';
											}
											?>
											</div>
					</div>
					</div>
											
											 						
								<table class="col-lg-6">
									<tr><th><h3><u>Important Files</u></h3></td></th></tr>
									<?php
									$count =0;
									$title = array(" "," "," ");
									$file = array(" "," "," ");
									$pipsql = mysqli_query($conn,"SELECT Name,file FROM file ORDER BY id DESC");
									while(($myrow = mysqli_fetch_array($pipsql))&&($count<20)){
										$title[$count]=$myrow['Name'];
										$file[$count]=$myrow['file'];
											
									echo'<tr>
												<td>Download: <a href="'.$file[$count].'">'.$title[$count].'</a></td>												
											</tr>';
									}
									$count++;
									?>
								</table>
								</div>
	</div>

</div>
		
							</div>
							
			   
				
				

						
			<!-- ==============FOOTER CODES START HERE ======================== --->
			<div  class="container">
			 <div class="row">
			 <div class="col-md-14 col-sm-14 col-xs-14 col-lg-14 color">
			 <?php
				include('footer.php');
			?>
            </div>
			 </div>
			 </div>
			

</body>
</html>