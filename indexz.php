<!DOCTYPE html>
<?php
  session_start();
  $let1=isset($_SESSION['name']);
  if($let1){
	  session_destroy();
  }
  if(isset($_GET['log'])){
	  $_SESSION['user'];
	  session_destroy();
	  echo "<meta http-equiv='refresh' content='0;url=index.php'>";
  }
?>
<html lang="en" >
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script scr="js/bootstrap.min.js"></script>
		<div class="container" style="background-color:white;">
            <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
				<div class="row">
					<!--Here-->
					<div class="navbar navbar-inverse navbar-static-top">
		  <div class="container">
		    <a href="index.php" class="navbar-brand"> RASA UR-HUYE CAMPUS</a>	
   <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   </button>   
            <div class="collapse navbar-collapse navHeaderCollapse">
                <ul class= "nav navbar-nav navbar-right">
				
				  <li class="active"><a href="index.php">HOME</a></li>
				  <li class="drapdown">
				  <a href="#" class="dropdown-toggle" data-toggle = "dropdown">BRANCHES<b class="caret"></b></a>
				  <ul class="dropdown-menu">
				  <li><a href="http://rasa-sfb.yolasite.com/">rasa ur gikondo campus</a></li>
				  <li><a href="http://rasarwanda.org/">RASA COORDINATION</a></li>
				  <li><a href="#">rasa inatek-kibungo</a></li>
				  <li><a href="#">rasa Ur-cbe</a></li>
				  <li><a href="#">rasa Ur-cavm busogo-rubirizi campus</a></li>
				  <li><a href="http://rasanyagatarecampus.webs.com/">rasa ur-nyagatare</a></li>
				  <li><a href="">rasa Ur-nyarugenge campus</a></li>
				  
				  </ul>
				  
				  </li>
				  <li><a href="index.php">CHOIR</a></li>
				  <li><a href="index.php">REGISTRATION</a></li>
				  <li><a href="index.php">ABOUT US</a></li>
				
				</ul>
               			
            </div>			
          </div>		
		</div>
		<!-- CODES TO MAKE JUMBOTRON I.E LARGE TEXT OR ANY OTHER INFORMATION -->
		
	<div class="container">
	  <div class="jumbotron">
	  <h1>RASA ur-huye Log<h1>
	  <center>
	  <a class="btn btn-info">Facebook</a>
	  <a class="btn btn-info">Twitter</a>
	  </center>
	 <!-- <a href="index.php"><img src="images/rasa_logos.png" alt="log not found" /></a> -->
	  </div>
	</div>
					<!-- MENU ENDED HERE -->
					
	<!-- ============================================colom 1 start============================================================================================ -->				
					<!--colunm1-->
					<div class="container">
					<div class="row">
					<div class="col-md-9">
						<!--headernews-->
						<div class="container-fluid">
								<!--panel1-->
							<div class="row">
							<div class="panel pcolor">
								<div class="panel-heading text-center">
									<b><em>Recent News</em></b>
								</div>
								==========
								<div class="panel-body">
								<div class="col-md-10" style="margin-left:90px">
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
												        <a href="Newsdisplay.php?hdfjafreuruqifhjak='.$myrow["id"].'&hdfjafreuruqifhj='.$myrow["date"].'"><img src="'.$myrow["Image"].'" width="100%" style="height:400px"></a>
														<div class="carousel-caption">
														    <a href="Newsdisplay.php?hdfjafreuruqifhjak='.$myrow["id"].'&hdfjafreuruqifhj='.$myrow["date"].'"><h4 style="color:#ffffff">'.$myrow["Title"].'</h4></a>
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
						<!--panel2-->
						
					<!--	================================================ ENDED =================================================== -->
						<div class="panel pcolor">
							<div class="panel-title text-center">
								<b><em>Other News</em></b>
							</div>
								
							<div class="panel-body">
							<?php
											$pipsql = mysqli_query($conn,"SELECT * FROM news ORDER BY id DESC LIMIT 5,10");
											while($myrow = mysqli_fetch_array($pipsql))
											{
                                echo '<div class="media">
                                    <div class="media-left media-middle">
                                        <a href="Newsdisplay.php?hdfjafreuruqifhjak='.$myrow["id"].'&hdfjafreuruqifhj='.$myrow["date"].'">
                                            <img src="'.$myrow["Image"].'" alt="No image" width="120px" height="120px" class="margin-right"/>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">'.$myrow["Title"].'</h4>
                                        <p>'.$myrow["Resume"].'</p>
										<p align="right">Posted at '.substr($myrow["date"],11,18).'<a href="Newsdisplay.php?hdfjafreuruqifhjak='.$myrow["id"].'&hdfjafreuruqifhj='.$myrow["date"].'" class="btn btn-link">Read More</a></p>
                                    </div>
                                </div>';
											}
											?>
							</div>

							<div class="panel-body">
								<h3 class="text-center">Important Files</h3>
								<table class="table">
									
									<?php
									$count = 0;
									$title = array(" "," "," ");
									$file = array(" "," "," ");
									$pipsql = mysqli_query($conn,"SELECT Name,file FROM file ORDER BY id DESC");
									while(($myrow = mysqli_fetch_array($pipsql))&&($count<9)){
										$title[$count]=$myrow['Name'];
										$file[$count]=$myrow['file'];
											$count++;
									}
										echo'<tr>
												<td>Download: <a href="'.$file[0].'">'.$title[0].'</a></td>
												<td>Download: <a href="'.$file[1].'">'.$title[1].'</a></td>
												<td>Download: <a href="'.$file[2].'">'.$title[2].'</a></td>
											</tr>';
									
									?>
								</table>
							</div>
						</div>
					</div>
					
					<!-- ===========================ended ===================================== --->
					
					
					<!--colunm3-->
					<?php
						include("aside.php");
					?>
				</div>
			
			
			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 color"  style="background-image:url('top-bg.png'); color:white">
            <?php
				include('footer.php');
			?>
            </div>
			</div>
			<!-- ============================================end of our container============================================================================================ -->
			
			
		</div>
    </div>
	
	</body>
</html>
