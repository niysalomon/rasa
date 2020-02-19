<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Edit your profile</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/this.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container border">

          <div class="masthead clearfix">
            <div class="inner">
                <?php
                    echo'
              <h3 class="masthead-brand"> Your profile: '. $_SESSION['user'];
                ?>
              </h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="index.php">Home</a></li>
                 <!-- <li><a href="aboutUs.php">About Us</a></li> -->
                  <li><a href="index.php#foot1">Contact Us</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div style="margin-top:-100px" class="inner cover">
            <div class="col-md-12">
                <?php
                   
                    include('connection.php');
                    
                function saveimage($name,$file_location){
                                    include('connection.php');
                                    foreach ($_POST["Id"] AS $id){
                                                        /*echo 'ID is ' .$id.'<br />';
                                                        echo 'Field1 is ' .$_POST["field1"][$id].'<br />';
                                                        echo 'Field2 is ' .$_POST["field2"][$id].'<br />';*/
                                                        $field1= mysqli_real_escape_string($conn,$_POST["firstname"][$id]);
                                                       $field2 = mysqli_real_escape_string($conn,$_POST["lastname"][$id]);                                                      
                                                       $field3 = mysqli_real_escape_string($conn,$_POST["gender"][$id]);
                                                       $field4 = mysqli_real_escape_string($conn,$_POST["work"][$id]);
                                                       $field5 = mysqli_real_escape_string($conn,$_POST["cell"][$id]);
                                                       $field6 = mysqli_real_escape_string($conn,$_POST["college"][$id]);
                                                       $field7 = mysqli_real_escape_string($conn,$_POST["department"][$id]);  
                                                       $field8 = mysqli_real_escape_string($conn,$_POST["level"][$id]); 
                                                       $field9 = mysqli_real_escape_string($conn,$_POST["tel"][$id]);                                                      
                                                       $field10 = mysqli_real_escape_string($conn,$_POST["email"][$id]);
                                                       $field11 = mysqli_real_escape_string($conn,$_POST["user"][$id]);
                                                       $field12 = mysqli_real_escape_string($conn,$_POST["pass"][$id]);

                                                        if($file_location){
                                                          $update='UPDATE christian
                                                          SET firstname ="'. $field1.'", lastname = "'.$field2.'", gender = "'.$field3.'", work= "'.$field4.'", cell= "'.$field5.'",
                                                          college= "'.$field6.'", department = "'.$field7.'",level = "'.$field8.'",tel = "'.$field9.'", email= "'.$field10.'", user = "'.$field11.'",
                                                           pass= "'.$field12.' ", photo = "'.$file_location.' "
                                                          WHERE Id = "'.$id.'"';}
                                                        else{
                                                         $update='UPDATE christian
                                                          SET firstname ="'. $field1.' ", lastname = "'.$field2.' ", gender = "'.$field3.' ", work= "'.$field4.' ", cell= "'.$field5.' ",
                                                          college= "'.$field6.' ", department = "'.$field7.' ",level = "'.$field8.' ",tel = "'.$field9.' ", email= "'.$field10.' ", user = "'.$field11.' ",
                                                           pass= "'.$field12.' "
                                                          WHERE Id = "'.$id.'"';
                                                        }
                                                        mysqli_query($conn,$update) or die ('Wapi');
                                                        if($update){
                                                          echo "<meta http-equiv='refresh' content='0;url=edit.php'>";
                                                        }
                                                    }
                                }
                    $sql="SELECT * FROM christian WHERE user='".$_SESSION['user']."' ORDER BY id DESC LIMIT 0,1";
                                $res=mysqli_query($conn,$sql);
                                if(!$res)
                                {
                                    die("Query Failed!");
                                }
                                if( mysqli_num_rows($res) > 0){
                                     while($row=mysqli_fetch_assoc($res)){
                                       $kbs = $row['photo'];
                     echo'<form method="post" action="edit.php" enctype="multipart/form-data">
                <div class="col-md-6 pull-left">
                    <img class="img-circle center-block" src="img/'.$kbs.'" alt="No picture" height="140" width="140"><br />
                    <div class="form-group">
									<label style="font-size:10px" class="col-sm-4 control-label"> <span>Change Picture </span></label>
									<div class="col-sm-8">
										<input style="background-color:none;" class="form-control" type="file" name="file" value="'.$row["user"].'" />
									</div>
					</div>
                    <div class="form-group">
									<label class="col-sm-4 control-label font"> <span>Username </span></label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="user['.$row["Id"].']" value="'.$row["user"].'" placeholder="'.$row["user"].'" required />
									</div>
						</div>
                        <div class="form-group">
									<label class="col-sm-4 control-label font"> <span>Password </span></label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="pass['.$row["Id"].']" value="'.$row["pass"].'" placeholder="'.$row["pass"].'" required />
									</div>
						</div>
                </div>
                <div class="col-md-6 pull-right">';
                    echo'
                        <h3 class="cover-heading">Change your Profile.</h3>
                        <div class="form-group">
									<label class="col-sm-4 control-label font"> <span>Firstname</span></label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="firstname['.$row["Id"].']" value="'.$row["firstname"].'" placeholder="'.$row["firstname"].'" required />
									</div>
						</div>

                        <div class="form-group">
									<label class="col-sm-4 control-label font"> <span>Lastname</span></label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="lastname['.$row["Id"].']" value="'.$row["lastname"].'" placeholder="'.$row["lastname"].'" required />
									</div>
						</div>

                        <div class="form-group">
									<label class="col-sm-4 control-label font"> <span>Membership</span></label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="work['.$row["Id"].']" value="'.$row["work"].'" placeholder="'.$row["work"].'" required />
									</div>
						</div>

                        <div class="form-group">
									<label class="col-sm-4 control-label font"> <span>Cell</span></label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="cell['.$row["Id"].']" value="'.$row["cell"].'" placeholder="'.$row["cell"].'" required />
									</div>
						</div>

                        <div class="form-group">
									<label class="col-sm-4 control-label font"> <span>Department</span></label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="department['.$row["Id"].']" value="'.$row["department"].'" placeholder="'.$row["department"].'" required />
									</div>
						</div>
						<div class="form-group">
									<label class="col-sm-4 control-label font"> <span>Level</span></label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="level['.$row["Id"].']" value="'.$row["level"].'" placeholder="'.$row["level"].'" required />
									</div>
                  <div class="form-group">
                  <label class="col-sm-4 control-label font"> <span>Telephone</span></label>
                  <div class="col-sm-8">
                    <input class="form-control" type="text" name="tel['.$row["Id"].']" value="'.$row["tel"].'" placeholder="'.$row["tel"].'" required />
                  </div>
                  
						</div>
						<div class="form-group">
									<label class="col-sm-4 control-label font"> <span>Email</span></label>
									<div class="col-sm-8">
										<input class="form-control" type="text" name="email['.$row["Id"].']" value="'.$row["email"].'" placeholder="'.$row["email"].'" required />
									</div>
						</div>                       

                                <input type="hidden" name="Id[]" value="'.$row["Id"].'">

						</div>
                </div><br />
                <p class="lead">
                            <input type="submit" class="btn btn-default" name="save" value="Save Changes" />
                        </p>
                    </form>';
                                }
                        }
                        if(isset($_POST["save"])){
                          if(isset($_FILES['file'])){
                              $targetFolder = "img/";
                              $file_location = "";
                              $name = $_FILES['file']['name'];
                              $targetFolder = $targetFolder.basename($_FILES['file']['name']);
                              $file_location = $file_location.basename($_FILES['file']['name']);
                              $image_file_type = pathinfo($targetFolder,PATHINFO_EXTENSION);
                              $sitiuation = move_uploaded_file($_FILES['file']['tmp_name'],$targetFolder);
                              /*if(!$sitiuation)
                              {
                                echo "<h1 style='color:#000;'>Wapi bya Failinz  </h1>".$_FILES['file']['error'];
                              }else{*/
                                saveimage($name,$file_location);
                              /*}*/
                          }
                    }
                ?>
            </div>
            
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p><a href="http://facebook.com/spartacus.amphoteric"></a> <a href="#"></a>.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
