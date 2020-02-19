<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="1/thumbs2.css" rel="stylesheet" />
    <link href="1/thumbnail-slider.css" rel="stylesheet" type="text/css" />
    <script src="1/thumbnail-slider.js" type="text/javascript"></script>
    <link href="css/main.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<link href="main.css" rel="stylesheet" type="text/css">
    <style>
        body {font: normal 0.9em Arial;color: #000;}
        header {display:block; font-size:1.2em; margin-bottom:100px;}
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
    <link rel="shortcut icon" href="earlogo.PNG"/>
</head>
<body>
    <!--start-->
    <div style="max-width:900px;margin:0 auto;padding:0px 0;">

        <div style="float:left;padding-top:0px;">
            <div id="thumbnail-slider">
                <div class="inner">
                    <?php
											include('connection.php');
											$pipsql = mysqli_query($conn,"SELECT * FROM gallery ORDER BY Id DESC");
											$count = 0;
											$class1 = 'item active';
											$pics1 = array("","","","","","","","","","","","");
											$Name1 = array("","","","","","","","","","","","");
											$choir1 = array("","","","","","","","","","","","");
											while(($myrow = mysqli_fetch_array($pipsql))&&($count<12))
											{$pics1[$count] = $myrow["photo"]; $Name1[$count] = $myrow["Name"];
											$IDs[$count] = $myrow["id"]; $choir1[$count] = $myrow["choir"];
											$count++;}
                    echo'<ul>';
                        for($ii=0;$ii<12;$ii++){
                        echo'<li>
                            <a class="thumb" href="'.$pics1[$ii].'"></a>
                        </li>';}
                    echo'</ul>';
                ?>
                </div>
            </div>
        </div>

        

        <div style="clear:both;"></div>
        
    </div>
    <!--end-->
    
</body>
</html>
