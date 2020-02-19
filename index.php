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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>RASA NYARUGENGE CAMPUS</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
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
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />

</head>
<body>

                                        <!-- END OF PANEL -->
                                        
                                        
                                        
                                        
                                        <!-- ================== Next Row start For Other News ========================= -->
                                        
    <div class="switcher" style="left:-50px;">
        <a id="switch-panel" class="hide-panel">
            <i class="fa fa-desktop"></i>

        </a>
        <p style="font-size:10px">choose</p>
        <ul class="colors-list">
            <li><a title="Pink" id="pink" class="pink" ></a></li>
            <li><a title="Green" id="green" class="green" ></a></li>
            <li><a title="Blue" id="blue" class="blue" ></a></li>
             <li><a title="Brown" id="brown" class="brown" ></a></li>
           
        </ul>
        
        
    </div>	
   
    <!-- /. END THEME SWITCHER-->

    <div id="home-sec">
       
            <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-4">
            </div>
                
                    <div class="col-lg-4 col-md-4 col-sm-4 text-center" style="background-color:#c1c1c1";>
                       
                        <a href="register.php" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".1s">
                            <i class="fa fa-info icon-round icon-round-active"></i>
                            <h4 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">MEMBER REGISTRATION</h4>
                        </a>
                        <a href="morePics.php" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".3s">
                            <i class="fa fa-book icon-round"></i>
                            <h4 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">GALLERY</h4>
                        </a>
                        <a href="missions.php" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".5s">
                            <i class="fa fa-recycle icon-round icon-round-active"></i>
                            <h4 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".6s">OUR MISSION </h4>
                        </a>
                        <a href="aboutUs.php" class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".7s">
                            <i class="fa fa-info icon-round icon-round-active"></i>
                            <h4 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".8s">ABOUT RASA NYARUGENGE</h4>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
            </div>
                </div>           
        </div>
  
    <!-- HOME SECTION END-->
    <section id="home-sec">
    <div class="overlay">
    <div class="container">
    <div class="col-md-2">
    </div>
     <div class="col-md-8">
     <h4 class="form-control">NEW UPDATES IN RASA UR NYARUGENGE CAMPUS</h4>
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
                                                        <a href="Newsdisplay.php?ssalo='.$myrow["id"].'&sal='.$myrow["Title"].'"><img src="'.$myrow["Image"].'" width="100%" style="height:auto;"></a>
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
                                        <div class="col-md-3">
    </div>
                                        </div>
                                        </div>
    </section>

    <section id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">
                    <h1>WHAT TO KNOW</h1>
                    <h1>ABOUT RASA</h1>
                    <h1>NYARUGENGE CAMPUS</h1>
                    <div class="color-strip"></div>
                    <div class="social-icon">
                        <a href="#">
                            <img src="assets/img/Social/facebook.png" alt="" /></a>
                        <a href="#">
                            <img src="assets/img/Social/google-plus.png" alt="" /></a>
                        <a href="#">
                            <img src="assets/img/Social/twitter.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">
                    <p>
                       
                    RASA NYARUGENGE CAMPUS missions:

Prayers and biblical studies.

Individual and collective preaching through visit and evangelization campaign.

Teach the history and doctrine of Anglican church.

Engaging oneself by visiting the patients, helping the miserable people.

Organize sport activities and entertainment.

Teaching and seminars

Reproduce Christian leaders in the realms of family, business, community and ministry.

The motto of the RASA is "Salvation, Love, and Work".
                    </p>
                    <p>
                       Salvation:

Though the sacrifice of Jesus Christ, whoever believes in him was given the right to be called the son of God.

"For the grace of God has appeared for the salvation of all men". Titus 2:11 "For God so loved the world then he gave his only son, that whoever believes in him should not perish but have eternal life" John 3:16

Love:

Living in mutual love without any discrimination.

"Beloved, if God so loved one another. 1John 4:11

Work:

Gathering our forces to build. “Then I said to them ‘You see the trouble we are in, how Jerusalem lies in ruins with its gates burned. Come, let us build the wall of Jerusalem, and then we may no long suffer disgrace” Nehemiah 2:17-18
                    </p>
                </div>
            </div>



        </div>
 

</section>
    <!-- RESUME SECTION END-->
    

    <!-- SKILL SECTION END-->
    <section id="resume-sec">
        <div class="container">                         
                <div class="col-lg-12 col-md-12 col-sm-12 text-center" data-wow-duration="1s" data-wow-delay=".4s">

                    <div class="board">
                        <div class="board-inner">
                        <h3>
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active">
                                    <a href="#home" data-toggle="tab" title="wake up">
                                        <span class="round-tabs one">
                                            <i class="fa fa-home"></i>
                                        </span>
                                    </a></li>

                                <li><a href="#profile" data-toggle="tab" title="New being">
                                    <span class="round-tabs two">
                                        <i class="fa fa-home"></i>
                                    </span>
                                </a>
                                </li>
                                <li><a href="#exp" data-toggle="tab" title="Blessed">
                                    <span class="round-tabs three">
                                        <i class="fa fa-home"></i>
                                    </span></a>
                                </li>

                                <li><a href="#location" data-toggle="tab" title="song of song">
                                    <span class="round-tabs four">
                                        <i class="fa fa-home"></i>
                                    </span>
                                </a></li>

                                <li><a href="#contact" data-toggle="tab" title="umusingi">
                                    <span class="round-tabs five">
                                        <i class="fa fa-home"></i>
                                    </span></a>
                                </li>
                                 <li><a href="#holy" data-toggle="tab" title="Holy">
                                    <span class="round-tabs six">
                                        <i class="fa fa-home"></i>
                                    </span></a>
                                </li>
                                 <li><a href="#unity" data-toggle="tab" title="unity">
                                    <span class="round-tabs seven">
                                        <i class="fa fa-home"></i>
                                    </span></a>
                                </li>

                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home">

                                <h4 class="head text-center">wake up</h4>
                                <p class="narrow text-center">
                                    <span>
                                        <i>Dady : </i>NIYIGIRA Salomon
                                    </span>
                                    <span>
                                        <i>location :</i>kukibuga
                                    </span>
                                    <span>
                                        <i>Dioceses :</i>Byumba and kigali
                                    </span>                                
                                    <span>
                                        <i>contact :</i>0782396251
                                    </span>
                                </p>


                            </div>
                            <div class="tab-pane fade" id="profile">

                                <h4 class="head text-center">New being</h4>
                                <p class="narrow text-center">
                                    <span>
                                        <i>Dady : </i>NIYIGIRA Salomon
                                    </span>
                                    <span>
                                        <i>location :</i>kukibuga
                                    </span>
                                    <span>
                                        <i>Dioceses :</i>Byumba and kigali
                                    </span>                                
                                    <span>
                                        <i>contact :</i>0782396251
                                    </span>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="exp">
                                <h4 class="head text-center">blessed</h4>
                                <p class="narrow text-center">
                                    <span>
                                        <span>
                                        <i>Dady : </i>NIYIGIRA Salomon
                                    </span>
                                    <span>
                                        <i>location :</i>kukibuga
                                    </span>
                                    <span>
                                        <i>Dioceses :</i>Byumba and kigali
                                    </span>                                
                                    <span>
                                        <i>contact :</i>0782396251
                                    </span>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="location">
                                <h4 class="head text-center">song of song</h4>
                                <p class="narrow text-center">
                                    <span>
                                        <i>Dady : </i>NIYIGIRA Salomon
                                    </span>
                                    <span>
                                        <i>location :</i>kukibuga
                                    </span>
                                    <span>
                                        <i>Dioceses :</i>Byumba and kigali
                                    </span>                                
                                    <span>
                                        <i>contact :</i>0782396251
                                    </span>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="contact">
                                <h4 class="head text-center">Umusingi</h4>

                                <p class="narrow text-center">
                                   <span>
                                        <i>Dady : </i>NIYIGIRA Salomon
                                    </span>
                                    <span>
                                        <i>location :</i>kukibuga
                                    </span>
                                    <span>
                                        <i>Dioceses :</i>Byumba and kigali
                                    </span>                                
                                    <span>
                                        <i>contact :</i>0782396251
                                    </span>
                                </p>
                            </div>
                             <div class="tab-pane fade" id="unity">
                                <h4 class="head text-center">Unity</h4>

                                <p class="narrow text-center">
                                   <span>
                                        <i>Dady : </i>NIYIGIRA Salomon
                                    </span>
                                    <span>
                                        <i>location :</i>kukibuga
                                    </span>
                                    <span>
                                        <i>Dioceses :</i>Byumba and kigali
                                    </span>                                
                                    <span>
                                        <i>contact :</i>0782396251
                                    </span>
                                </p>
                            </div>
                             <div class="tab-pane fade" id="holy">
                                <h4 class="head text-center">Holy</h4>

                                <p class="narrow text-center">
                                   <span>
                                        <i>Dady : </i>NIYIGIRA Salomon
                                    </span>
                                    <span>
                                        <i>location :</i>kukibuga
                                    </span>
                                    <span>
                                        <i>Dioceses :</i>Byumba and kigali
                                    </span>                                
                                    <span>
                                        <i>contact :</i>0782396251
                                    </span>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                      
        </div>

   </section>
    <!-- ABOUT SECTION END-->
    <section id="skill-sec">
        <div class="overlay">
            <div class="container">
                <div class="row pad-top-bottom move-me">
                    <div class="col-lg-2 col-md-2 col-sm-2 text-center wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">
                        <span class="chart" data-percent="75">
                            <span class="percent"></span>
                        </span>
                        <h4>AMASERIRE</h4>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 text-center wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">
                        <span class="chart" data-percent="10">
                            <span class="percent"></span>
                        </span>
                        <h4>GUHIMBAZA </h4>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 text-center  wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".6s">
                        <span class="chart" data-percent="95">
                            <span class="percent"></span>
                        </span>
                        <h4>AMASENGESHO</h4>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-2 text-center wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".8s">
                        <span class="chart" data-percent="55">
                            <span class="percent"></span>
                        </span>
                        <h4>AMATERANIRO</h4>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4  wow bounceIn animated" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="panel-heading text-center">
                                                <h4 class="form-control ">Week Programs</h4>
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
                </div>
            </div>
        </div>
    </section>



    <!-- TESTIMONIAL SECTION END-->
    <section id="portfolio-sec">
        <div class="container">
            <div class="row text-center wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">
            <div class="col-lg-6">
             <h1>Acces RASA system by login</h1>
                    <p>use your username and password.. </p>
                   
                </div>
                <div class="col-lg-4">
                    <h1>login</h1>
                     <?php 
                                        include('login.php');
                                    ?>
                </div>
            </div>
            
        </div>
    </section>
    <!-- PORTFOLIO SECTION END-->     
    <?php
    include("footer.php");
    ?>
    <!-- HIRE SECTION END-->
    <div class="move-me">
        <a href="#home-sec" class="scrollup"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- SCROLL TO TOP SECTION END-->
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
