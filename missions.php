<!DOCTYPE html>
<?php
  /*session_start();
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
		<title>RASA NYARUGENGE</title>
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
	<form class="navbar-form navbar-right" role="search"  action="search.php" method="get">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search" name="search" required>
										</div>
										<input class="btn btn-danger" type="submit" class="btn btn-default" id="search_form" value="Search"/>
									</form>	
	</div>
	
	

<h4>ABOUT RASA NYARUGENGE</h4>


<div class="col-md-9 col-sm-9 col-xs-9 col-lg-9" style="width:100%;">
					
					
					<table class="table ">
					<div class="left-col-content-title">
                      <small><b><h4 align="center" style="color: #000000; font-family: Arial;">MISSIONS & MOTO</h4></b></small>
                     </div>
                        <tr>
                        <td><label><h5 class="pad-bottom2"> missions:</h5></label></td>
                        </tr>                    
                       <ul> <tr>
                        <td><span><li><p>Prayers and biblical studies.</p></li></span></td>
						</tr>
                        
                        <tr><td><span><li><p>Individual and collective preaching through visit and evangelization campaign.</p></li></span></td>                                                      
                        </tr>
                        
                        <tr><td><span><li><p>Teach the history and doctrine of Anglican church.</p></li></span></td>                       
                        </tr>                        
                        <tr>
                        <td><span><li><p>Engaging oneself by visiting the patients, helping the miserable people.</p></li></span></td>
                        </tr>                       
                        <tr>
                        <td> <span><li><p>Organize sport activities and entertainment.</p></li></span></td>
                        </tr>
                        
                        <tr>
                        <td><span><li><p>Teaching and seminars </p></li></span></td>
                         </tr>                       
                        <tr>
                        <td><span><li><p>Reproduce Christian leaders in the realms of family, business, community and ministry.</p></li></span></td>
                       </tr>                       
                        <tr>
                        
                        </tr>
                        </ul>
						<!----------- MOTO CODE START  -->
						
						<tr>
                        <td><span><h5>The motto of the RASA is "Salvation, Love, and Work".</h5></span></td>						
                        </tr>
						<tr>
                        <td><span>
						<small><h6 class="pad-bottom2" style="color:blue;">Salvation: </h6>
	                        <p>Though the sacrifice of Jesus Christ, whoever believes in him was given the right to be called the son of God.</p>
	                         <p>"For the grace of God has appeared for the salvation of all men".

                              <u><b>Titus 2:11</b></u> "For God so loved the world then he gave his only son, that whoever believes 
                               in him should not perish but have eternal life" <u><b>John 3:16</b></u></small>
						</span></td>						
                        </tr>
						
						<tr>
                        <td><span>
						</p>
						 <small> <h6 class="pad-bottom2" style="color:blue;">Love: </h6>
						  <p>Living in mutual love without any discrimination.</p>
						  <p>"Beloved, if God so loved one another. <u><b>1John 4:11</b></u></p></small>
						</span></td>						
                        </tr>
						
						<tr>
                        <td> <span>
						<small><h6 class="pad-bottom2" style="color:blue;" >Work: </h6>
						  <p>Gathering our forces to build. “Then I said to them ‘You see 
						  the trouble we are in, how Jerusalem lies in ruins with its gates burned.
						  Come, let us build the wall of Jerusalem, and then we may no long suffer disgrace” 
						  <u><b>Nehemiah 2:17-18</b><u></p></small>
											
						</span></td>						
                        </tr>
						<!-----------END MOTO CODE START  -->
                    </table>
					
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

</div>
<!-- =======FOOTER CODES END HERE =================  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script scr="js/bootstrap.min.js"></script>
	</body>
</html>
