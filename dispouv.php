<!DOCTYPE html>
<?php
  session_start();
  $let1=isset ($_SESSION['name']);
  if($let1){
	  session_destroy();
  }
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ear Byumba</title>
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
		<link rel="shortcut icon" href="earlogo.PNG"/>
		
	</head>

	<body style="background-color:#c1c1c1;">
<div class="container">
            <div class="row">
			<div class="col-md-16 col-sm-16 col-xs-16 col-lg-16">
				<div class="row">
					<!--Here-->
					<div class="navbar navbar-inverse navbar-static-top">
		  <div class="container">
		    <a href="index.php" class="navbar-brand"></a>	
   <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   </button>   
            <?php
include_once('navigation.php');
?>
		<!-- CODES TO MAKE JUMBOTRON I.E LARGE TEXT OR ANY OTHER INFORMATION header image -->
		
	<div class = "container">		
     <div class="row">
	<div class="col-lg-7">
	<div class = "panel panel-default"  >
	<div class="panel-body">
	<div class="page-header">	
	</div>
	<li>
               	<form class="navbar-form navbar-right" role="search"  action="search.php" method="get">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search late news" name="search" required>
										</div>
										<input class="btn btn-danger" type="submit" class="btn btn-default" id="search_form" value="Search"/>
									</form>	
               </li>	
	<img class="featuredImg" src="images/rasa_logos.png" alt="log not found" width="100%" />

<h6 align = "center" >Read All page</h6>
<hr />
<p>

<div class="col-md-7 col-sm-7 col-xs-7 col-lg-7" style="width:100%;">
						<!--headernews-->
						<div class="container-fluid">
						<!--panel1-->
                        <div class="panel">
						<div class="panel-body">
								<?php
								 include('connection.php');
											
											if(isset($_REQUEST['fields']))
											  {
											  $loop = $_REQUEST['fields'];
											 $pipsql = mysqli_query($conn,"SELECT * FROM postall WHERE fields='$loop'");
											  $bool = true;
											}											
											while($myrow = mysqli_fetch_array($pipsql))
											{
											if(!$bool)
											{
											echo
											'   <ul>
											   <li class="media">
											      <div class="media-left">
												     
													    <img class="media-object" src="'.$myrow["image"].'" alt="..." width="120" height="120">
												     </a>
											      </div>
											      <div class="media-body">';
											echo '<br />';
										    echo '<h4 class="media-heading text-center">'.$myrow["fields"].'</h4>';
											echo '<br />';                                           
                                            echo "<br /><i style='color:green;'>on ".$myrow["paragraph"].'</i><br /></p>
												  </div>
										       </li>
											   <hr /></ul>';}
											else
											{
											     /* $inchuro = $myrow["inshuro"];
												  $inchuro++;
												  $_sql = 'UPDATE news SET inshuro='.$inchuro.' WHERE id='.$loop;
												  mysqli_query($conn,$_sql);*/ 
											  echo '
											           <div class="panel">
													      <div class="panel-body">
														        <h4 class="media-heading text-center">'.$myrow["fields"].'</h4><br />
                                                          </div>
														  <div class="row">
                                                            <div class="panel-body">
                                                                        <a href="#">
                                                                        <img class="media-object" src="'.$myrow["image"].'" alt="No picture" height="auto" width="85%">
                                                                        </a>
                                                            </div>
                                                          </div>
                                                          <div class="panel-body">
                                                                <br />
                                                                  
                                                                    <p>'.$myrow["paragraph"].'</p>
                                                                <br />
												           </div>
														 </div>
													';
											}
											}
											?>
									</div>
                                    </div>	
						<!--panel2-->
						<div class="panel pcolor">
							
							<?php
                            
											$pipsql = mysqli_query($conn,"SELECT * FROM postall WHERE fields='$loop' ORDER BY id DESC LIMIT 10,15");
											while($myrow = mysqli_fetch_array($pipsql))
											{
                                                echo'
                                                <div class="panel-title text-center">
                                                    <b><em>Other News</em></b>
                                                </div>
                                                    
                                                <div class="panel-body">
                                                ';
                                echo '<div class="media">
                                    <div class="media-left media-middle">
                                        <a href="#">
                                            <img src="'.$myrow["Image"].'" alt="No image" width="80px" height="80px" class="margin-right"/>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">'.$myrow["Title"].'</h4>
                                        <p>'.$myrow["Resume"].'</p>
										<p align="right"><a class="btn btn-link">Read More</a></p>
                                    </div>
                                </div></div><hr >';
											}
											?>
							
						</div>
					</div>
                    </div>
					</div>
					</div>
					</div>
					<div class="col-lg-5">
					<p><?php
						include("aside.php");
					?></p>
					<div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
							
							<?php
                            
											$pipsql = mysqli_query($conn,"SELECT * FROM news ORDER BY id DESC LIMIT 1,10");
											while($myrow = mysqli_fetch_array($pipsql))
											{
                                                echo'
                                                
                                                    
                                                <div class="panel-body">
                                                ';
                                echo '<div class="media">
                                    <div class="media-left media-middle">
                                        <a href="Newsdisplay.php?salo='.$myrow["id"].'&sal='.$myrow["Title"].'">
                                            <img src="'.$myrow["Image"].'" alt="No image" width="80px" height="80px" class="margin-right"/>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="Newsdisplay.php?salo='.$myrow["id"].'&sal='.$myrow["Title"].'" >'.$myrow["Title"].'</a></h4>
                                        <p><style=<i style=color:#FDEEF4;>'.$myrow["Resume"].'</i></p>
										<p align="right"><a href="Newsdisplay.php?salo='.$myrow["id"].'&sal='.$myrow["Title"].'">Read More</a></p>
                                    </div>
                                </div></div><hr >';
											}
											?>
							
						</div>
					</div>
					
					</div>
					</div>
					
					<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 color"  style="background-image:url('top-bg.png'); color:white">
            <?php
				include('footer.php');
			?>
            </div>
			</div>
               </p>
                     
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script scr="js/bootstrap.min.js"></script>
	</body>
</html>
