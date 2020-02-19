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

	 
           <?php
           include('rasamenu.php');

           ?>

						
         
		<!-- CODES TO MAKE JUMBOTRON I.E LARGE TEXT OR ANY OTHER INFORMATION header image -->
		
	<div class = "container">		
     <div class="row">
	<div class="col-lg-7">
	<div class = "panel panel-default"  >
	<div class="panel-body">
	<div class="page-header">
		<form class="navbar-form navbar-right" role="search"  action="search.php" method="get">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search late news" name="search" required>
										</div>
										<input class="btn btn-danger" type="submit" class="btn btn-default" id="search_form" value="Search"/>
									</form>	
	</div>               
             		
	
<h4>Results</h4>
<p>
<div class="col-md-7 col-sm-7 col-xs-7 col-lg-7">
                        <?php
                            include('connection.php');
									  $srtring = $_GET['search'];
									   $searching = explode(" ",$srtring);
									    $index = 0;
										$construct = " ";
										$angahe = 0;
										$datas = array("Title","Content","date");
										foreach( $searching as $results)
										{
										   $index++;
										   for(  $ii = 0; $ii<3; $ii++)
										     {
										     if($index==1)
											    switch($ii)
												{
												  case 0 : $construct.= "$datas[$ii] LIKE '%$results%'";
												  break;
												  case 1 : $construct.= " OR $datas[$ii] LIKE '%$results%'";
												  break;
												  case 2 : {$construct.= " OR $datas[$ii] LIKE '%$results%' ";}
												  break;
												}
											 else switch($ii)
												{
												  case 0 : $construct.= " OR $datas[$ii] LIKE '%$results%'";
												  break;
												  case 1 : $construct.= " OR $datas[$ii] LIKE '%$results%'";
												  break;
												  case 2 : $construct.= " OR $datas[$ii] LIKE '%$results%' ";
												  break;
												}
											 
											 }
										   include('connection.php');
										   $running = mysqli_query($conn,"SELECT * FROM news WHERE $construct");
										   echo mysqli_error($conn);
										   $numberOfFound = mysqli_num_rows($running);
										   $angahe = $numberOfFound; 
										}
										if($angahe > 0)
										     {
											    echo "<h4 class='text-center'>Results of <u>$srtring</u> are :</h4>";
											 }
                                        while($myrow = mysqli_fetch_assoc($running))
														{
														$idd = $myrow["id"];
										                $catego = $myrow["Image"];
										                   echo '
											<div class="media">
												<div class="media-left media-middle hidden-print hidden-xs hidden-sm">
													<a href="Newsdisplay.php?salo='.$idd.'&sal='.$catego.'">
														<img class="media-object" src="'.$myrow["Image"].'" alt="..." width="100" height="100">
													</a>
												</div>
												<div class="media-body">
													<a href="Newsdisplay.php?salo='.$idd.'&sal='.$myrow["Title"].'"><h4 class="media-heading text-center">'.$myrow["Title"].'</h4></a>
												</div>
											</div>';
														}
                        ?>
                    </div>
					</div>
					</div>
					</div>
					
					<div class="col-lg-5">
					<?php
						include("aside.php");
					?>
					</div>
					</div>
					
				</div>
		<!-- ============FOOTER CODES START======================= -->

	<?php
	include('footer.php');
	?>
	
<!-- =======FOOTER CODES END HERE =================  -->
					
</p>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script scr="js/bootstrap.min.js"></script>
	</body>
</html>
