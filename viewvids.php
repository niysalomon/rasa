<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="3/ninja-slider.css" rel="stylesheet" />
    <script src="3/ninja-slider.js"></script>
    <link href="3/thumbnail-slider.css" rel="stylesheet" type="text/css" />
    <script src="3/thumbnail-slider.js" type="text/javascript"></script>
    <style>
        body {font: normal 0.9em Arial;color:#222;}
        header {display:block; font-size:1.2em;margin-bottom:100px;}
        header a, header span {
            display: inline-block;
            padding: 4px 8px;
            margin-right: 10px;
            border: 2px solid #000;
            background: #DDD;
            color: #000;
            text-decoration: none;
            text-align: center;
            height: 20px;
        }
        header span {background:white;}
        a {color: #1155CC;}
    </style>
</head>
<body>
<?php
    include('connection.php');
											$pipsql = mysqli_query($conn,"SELECT * FROM videos ORDER BY Id DESC");
											$count = 0;
											$class = 'item active';
											$pics = array("","","","","");
											$Name = array("","","","","");
											$year = array("","","","","");
											$IDs = array("","","","","");
											$Choir = array("","","","","");
											$Vids = array("","","","","");
											$Categorie = array("","","","","");
											while(($myrow = mysqli_fetch_array($pipsql))&&($count<5))
											{
											$pics[$count] = $myrow["icon_url"]; 
										    $Name[$count] = $myrow["name"];
											$IDs[$count] = $myrow["Id"]; 
											$year[$count] = $myrow["year"];
											$Choir[$count] = $myrow["categorie"];
											$Vids[$count] = $myrow["Video_Url"];
											$Categorie[$count] = $myrow["categorie"];
											$count++;}
											echo'
												<!--start-->
													<div style="width:1000px;margin:80px auto;">
                                                        <div id="ninja-slider" style="float:left;">
															<div class="slider-inner">
																<ul>';
											for($iii=0;$iii<5;$iii++)
														echo'<li>
																<h3 class="slide_tit">
																	<a href="showvids.php?hdfjafreuruqifhjak='.$IDs[$iii].'&hdfjafreuruqifhj='.$year[$iii].'">
																		<p style="color:white;text-align:center">'.$Name[$iii].'</p>
																</a>
																</h3>
																<a class="ns-img" href="'.$pics[$iii].'"></a>
																</li>';
														echo '</ul>
															<div class="fs-icon" title="Expand/Close"></div>
														</div>
														</div>
													<div id="thumbnail-slider" style="float:left;">
														<div class="inner">
														<ul>';
												for($ii=0;$ii<5;$ii++)
														echo '<li><a class="thumb" href="'.$pics[$ii].'"></a></li>';
												echo'
											
										</ul>
										</div>
									</div>
									<div style="clear:both;"></div>
								</div>
												
												';
										?>
    
</body>
</html>
<?php
											