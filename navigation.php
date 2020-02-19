<div class="container">
					<!--Here-->
<div class="navbar navbar-default navbar-static-top" style="background-color:#FCDFFF; margin-top:5px; padding:7px;">
  <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   </button>   
            <div class="collapse navbar-collapse navHeaderCollapse">
               <b> <ul class= "nav navbar-nav navbar-left">
				
				  <li ><a  href="index.php">Home</a></li>
				  <li class="drapdown">
					<a href="#" class="dropdown-toggle" data-toggle = "dropdown">Evangelisation<b class="caret"></b></a>
					<ul class="dropdown-menu">
					<?php
					include('connection.php');
                    // $test=mysql_query("SELECT*FROM postall");
                    // while($res=mysql_fetch_array($test))
                    // {
                     //	$salomon=$res['field'];
					echo'<li><a href="dispouv.php?fields=mothersunion">Mothersunion</a></li>';
					echo'<li><a href="dispouv.php?fields=fathersunion">Fathersunion</a></li>';
					echo'<li><a href="dispouv.php?fields=choir"">Choirs</a></li>';
					echo'<li><a href="dispouv.php?fields=sociotherapy">SOCIOTHERAPY</a></li>';
					echo'<li><a href="dispouv.php?fields=elites">ELITES OF CHURCH</a></li>';
					echo'<li><a href="dispouv.php?fields=bgbrigade">BOYS&GIRLS BRIGADE</a></li>';
					echo'<li><a href="dispouv.php?fields=youth">YOUTH UNION</a></li>';
					//}
					
				 echo' </ul>';				  
				  echo'</li>';
				   echo'<li class="drapdown">';
					echo'<a href="#" class="dropdown-toggle" data-toggle = "dropdown">Development<b class="caret"></b></a>';
					echo'<ul class="dropdown-menu">';
					echo'<li><a href="dispouv.php?fields=agriculture" >Agriculture</a></li>';
					echo'<li><a href="dispouv.php?fields=livestock" >live stock</a></li>';
					echo'<li><a href="dispouv.php?fields=buildings" >Buildings</a></li>';
					echo'<li><a href="dispouv.php?fields=savings" >saving groups</a></li>';
					
				  echo'</ul>';				  
				  echo'</li>';
				  echo'<li class="drapdown">';
					echo'<a href="#" class="dropdown-toggle" data-toggle = "dropdown">Gallery<b class="caret"></b></a>';
					echo'<ul class="dropdown-menu">';
					echo'<li><a href="morePics.php" >Photoes</a></li>';
					echo'<li><a href="vvideos.php">Videos</a></li>';
					  echo'</ul>';				  
				  echo'</li>';
				  
				  echo'<li class="dropdown">';
				  echo'<a href="index.php" class="dropdown-toggle" data-toggle="dropdown" >Social<b class="caret"></b></a>';
				  echo'<ul class="dropdown-menu color">';
				  echo'<li><a href="dispouv.php?fields=ouv">U.Victoire Organisation</a></li>';
				  echo'<li><a href="dispouv.php?fields=hannah">Hannah Ministries</a></li>';
				 echo' <li><a href="dispouv.php?fields=health" >Health Care</a></li>';
				  echo'<li><a href="dispouv.php?fields=run" >Run for rwanda</a></li>';
				  echo'<li><a href="dispouv.php?fields=friends">friends of ear</a></li>';
				  echo'<li><a href="dispouv.php?fields=groups" >other group</a></li>';
				 echo' </ul>';
				  echo'</li>';
				  echo'<li class="dropdown">';
				  echo'<a class="dropdown-toggle" data-toggle="dropdown" href="aboutUs.php">Ear Byumba<b class="caret"></b></a>';
				 echo'<ul class="dropdown-menu color">';
				echo' <li><a href="dispouv.php?fields=aboutus">Our History</a></li>';
				echo'<li><a href="dispouv.php?fields=muhura">Muhura District</a></li>';
				echo' <li><a href="dispouv.php?fields=byumba">Byumba District</a></li>';
				echo'<li><a href="dispouv.php?fields=mukono">Mukono District</a></li>';
				echo' <li><a href="dispouv.php?fields=ngarama">Ngarama District</a></li>';
				echo'<li><a href="dispouv.php?fields=kigarama">Kigarama District</a></li>';
				echo' <li><a href="dispouv.php?fields=rutare">Rutare District</a></li>';
				echo' <li><a href="missions.php" >OUR MISSION</a></li>';
				echo'<li><a href="objective.php" >OUR OBJECTIVES</a></li>';
				echo' </ul>';

				 echo' </li>';
				
				echo'</ul>';
               	?>	
               	</b>	
            </div>			
          </div>
		  </div>