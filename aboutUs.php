<!DOCTYPE html>
<?php
 /* session_start();
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


		<style>
		   li.anotherOne ul div ul { position:absolute; left:50%; background-color:#fff; width:120%; list-style:none; padding:0 0 0 20%; visibility:hidden;}
		   li.anotherOne ul div:hover ul {visibility:visible;}
		   h2{color: blue;}
		   h2{color:#08f8b0;}
		</style>
		
	</head>

	<body style="background-color:black;">
		<div class="container" style="background-color:white;">
            <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
				<div class="row">
					<!--Here-->
					<?php
include_once('rasamenu.php');
?>
					
					<!--colunm1-->
					<div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
					<div class="col-md-12">
						<h3 class="text-center">About Us</h3>
						<hr width="80%" align="center" />
						<?php
							include('connection.php');
							$pipsql = mysqli_query($conn,'SELECT * FROM about ORDER BY id DESC LIMIT 0,1');
							while($myrow = mysqli_fetch_array($pipsql)){
								echo'<p class="text-center" style="padding: 5px 20px 0 20px">'.$myrow['amateka'].'<p>
										<hr width="80%" align="center" />';
							}
						?>
					</div>
					<table class="table table-striped">
					<div class="left-col-content-title">
                      <h1 style="color: blue; font-family: Arial;">MISSIONS OBJECTIVES & MOTO</h1>
                     </div>
                        <tr>
                        <td><label><h2 class="pad-bottom2">RASA mission include:</h2></label></td>
                        </tr>                    
                       <ol> <tr>
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
                        <td><label> <span><li><p>Reproduce Christian leaders in the realms of family, business, community and ministry.</p></li></span></label></td>
                       </tr>                       
                        <tr>
                        <td><span></span></td>
                        </tr></ol>
                        
						<ol>
						<tr>
						<td><span><h2 class="pad-bottom2" >OBJECTIVES OF RASA.</h2></td>
						</tr>
                        <tr>
                        <td><span><h3 class="pad-bottom2">RASA objectives include: </h3></span></td>
                        </tr>
                        
                       <tr>
                        <td><label> <span><li><p>To remove the Anglican students from loneliness, laziness and inactivity.</p></li></span></label></td>
						
                        </tr>
						<tr>
                        <td><label> <span><li><p>To sensitize and prepare the Anglican students for a noble responsibility in the church.</p></li></span></label></td>
                        </tr>
						<tr>
                        <td><label> <span><li><p>To initiate, encourage and sustain the work of preaching and social services.</p></li></span></label></td>
						
                        </tr>
						<tr>
                        <td><label> <span><li><p>To maintain and reinforce cohesion and unity of the University Community.</p></li></span></label></td>
						
                        </tr>
						<tr>
                        <td><label> <span><li><p>To protect church integrity and its doctrine.</p></li></span></label></td>
						
                        </tr>
						<tr>
                        <td><label> <span><li><p>Regroup youth as part of sensitization in a culture 
	                                             of peace, as unity of reconciliation and against AIDS and any case of
	                                             discrimination    and   narcotic
	                    </p></li></span></label></td>				
                        </tr>
						<tr>
                        <td><label> <span><li><p>Reproduce Christian leaders in the realms of family, business, community and ministry.</p></li></span></label></td>						
                        </tr>
						
						
						<!----------- MOTO CODE START  -->
						
						<tr>
                        <td><label> <span><h2>The motto of the RASA is "Salvation, Love, and Work".</h2></span></label></td>						
                        </tr>
						<tr>
                        <td><label> <span>
						<h3 class="pad-bottom2" style="color:blue;">Salvation: </h3>
	                        <p>Though the sacrifice of Jesus Christ, whoever believes in him was given the right to be called the son of God.</p>
	                         <p>"For the grace of God has appeared for the salvation of all men".

                              <u><b>Titus 2:11</b></u> "For God so loved the world then he gave his only son, that whoever believes 
                               in him should not perish but have eternal life" <u><b>John 3:16</b></u>
						</span></label></td>						
                        </tr>
						
						<tr>
                        <td><label> <span>
						</p>
						  <h3 class="pad-bottom2" style="color:blue;">Love: </h3>
						  <p>Living in mutual love without any discrimination.</p>
						  <p>"Beloved, if God so loved one another. <u><b>1John 4:11</b></u></p>
						</span></label></td>						
                        </tr>
						
						<tr>
                        <td><label> <span>
						<h3 class="pad-bottom2" style="color:blue;" >Work: </h3>
						  <p>Gathering our forces to build. “Then I said to them ‘You see 
						  the trouble we are in, how Jerusalem lies in ruins with its gates burned.
						  Come, let us build the wall of Jerusalem, and then we may no long suffer disgrace” 
						  <u><b>Nehemiah 2:17-18</b><u></p>
											
						</span></label></td>						
                        </tr>
						<!-----------END MOTO CODE START  -->
                    </table>
					
					</div>
					<!--colunm3-->
					<?php
						include("aside.php");
					?>
			</div>
			
			
			<?php
				include('footer.php');
			?>
            
		</div>
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script scr="js/bootstrap.min.js"></script>
	</body>
</html>
