<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="assets/css/bootstrap.css" rel="stylesheet" />
		<link href="css/main.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles1.css" rel="stylesheet">
		<link href="3/ninja-slider.css" rel="stylesheet" />
    	<script src="3/ninja-slider.js"></script>
        <link href="3/thumbnail-slider.css" rel="stylesheet" type="text/css" />
		<script src="3/thumbnail-slider.js" type="text/javascript"></script>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
     <link href="css/bootstrap.min.css" rel="stylesheet" />
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
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
		<link href="main.css" rel="stylesheet" type="text/css">
		<style>
			.clicking { cursor:pointer;}
			.pipPages { display:none;}
			.pipPages0 { display: block;}
        </style>
		<style>
		   li.anotherOne ul div ul { position:absolute; left:50%; background-color:#fff; width:120%; list-style:none; padding:0 0 0 20%; visibility:hidden;}
		   li.anotherOne ul div:hover ul {visibility:visible;}
		</style>
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
	 RASA PHOTOES
	 <form class="navbar-form navbar-right" role="search"  action="search.php" method="get">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search" name="search" required>
										</div>
										<input class="btn btn-danger" type="submit" class="btn btn-default" id="search_form" value="Search"/>
									</form>
	</div>
		
	
<hr />
<p>
<div class="panel-body">
                        <?php
			include("connection.php");
			$sql="SELECT * FROM gallery ORDER BY id DESC";
			$res=mysqli_query($conn,$sql);
			$idx=0;
			if(!$res)
			{
				die("Query Failed!");
			}
			$countPIP = 0;
			$pagees = 0;
			while($row=mysqli_fetch_assoc($res))
			{
			  $idx=$row['id'];
			  if(($countPIP%9==0)&&($countPIP>0)) { $pagees ++;}
			  if($countPIP%3==0)
			    {
				   echo '
				   <div class="row pipPages pipPages'.$pagees.'"><!-- fungura -->';
				}
				echo '
				<div class="col-xs-14 col-md-14 col-lg-14" style="width:auto;">
				         <a href="#myModal" data-toggle="modal" data-target:".bs-example-modal-lg" class="thumbnail back2 loadbutt" id="'.$idx.'">
                              <img  style="width:70%;height:auto;" src="'.$row['photo'].'" alt="check your Intenet">
                         </a>
					  </div>
					  
					  ';
			     if(((($countPIP+1)%3==0)&&($countPIP>0)))
			    {
				   echo '
				   </div> <!-- funga -->
				   
				   ';
				}
				$countPIP++;
			}
			
			 if(((($countPIP)%3!=0)&&($countPIP>0)))
			    {
				   echo '
				   </div> <!-- funga -->
				   
				   ';
				}
			?>
			
		</div>
                            <div class="panel-body">
                                <?php
                                        echo '
                                    <nav class="text-center">
                                    <ul class="pagination">
                                        <li class="clicking" id="pipN">
                                            <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            </a>
                                    </li>';
                                    for($iii = 0; $iii<($pagees+1); $iii++)
                                        {
                                        $iiii = $iii-1;
                                        $iiiii = $iii+1;
                                        
                                        echo '<li class="clicking" id="pipPages'.$iii.'"><span>'.$iiiii.'</span></li>';
                                        
                                        }
                                        echo '
                                        
                                    </ul>
                                </nav>';
                                        ?>
                                        <form >
                                            <input type="text" id="aho" value="0" style=" visibility:hidden;"/>
                                        </form>
                                        <!-- <div class="embed-responsive embed-responsive-16by9">
										<iframe style="margin-left:0px;" class="embed-responsive-item" src="viewpics.php"></iframe>
									</div> -->
                            
                            <div class="panel-body">
									<h4 class="page-header text-center">Pictures</h4>
										<p class="text pull-left" style="margin-left:0px">
											<a href="morePics.php" class="btn btn-success pull-left">View more pictures</a>
										</p><br /><br /><br /><br />
										<div class="embed-responsive embed-responsive-16by9">
											<iframe style="margin-bottom:0px;" class="embed-responsive-item" src="viewpics.php"></iframe>
										</div>
							</div>
							</div>
							</div>
                        </div>
						
                    </div>

					<div class="col-lg-4">
					<?php
						include("aside.php");
					?>
					</div>
				<div class="row" style="margin-bottom: 0px;">
					<div class="col-md-20 col-sm-20 col-xs-12 col-lg-12 color"><br/>
			<?php
				include('footer.php');
			?>
            
<!-- =======FOOTER CODES END HERE =================  -->
				
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script scr="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="modal.js"></script>
	<script type="text/javascript" src="page.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script scr="js/bootstrap.min.js"></script>
	 <!--  JQUERY CORE SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  SCROLL SCRIPTS -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  WOW ANIMATION SCRIPTS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- EASY PIE CHART SCRIPTS -->
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <!-- PRETTY PHOTO SCRIPTS -->
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <!--  STYLE SWITCHER SCRIPTS -->
    <script src="assets/js/styleSwitcher.js"></script>
    <!--  CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
	</body>
</html>
