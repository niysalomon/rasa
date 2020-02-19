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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">      
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.js"></script>
		<link href="../main.css" rel="stylesheet" type="text/css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <?php
       include('navigation11.php');
    ?>    

          </body>
          <?php

         include('../connection.php');
         
          //if(isset($_POST['sub']))
          //{

		  	//$rid= $_POST['rid'];
			//$date= $_POST['date'];
        
      
			@$planact= $_POST['planact'];      
      @$doneact= $_POST['doneact'];
      @$nodoneact= $_POST['nodoneact'];
      @$noplanact= $_POST['noplanact'];
      @$prob= $_POST['prob'];
      @$sugg= $_POST['sugg'];
      @$observ= $_POST['observ'];
      @$worker= $_POST['worker'];
      @$post= $_POST['post'];      
      @$comment= $_POST['comment'];      
      @$id=$_REQUEST['idd'];
 		
      $res=mysqli_query($conn,"INSERT INTO  reports(rid,dates,planact,doneact,nodoneact,noplanact,prob,sugg,observ,worker,post,comment,id)
      VALUES('',now(),'$planact','$doneact','$nodoneact','$noplanact','$prob','$sugg','$observ','$worker','$post','$comment','$id')");
      if($res){
        echo'report submitted';
      }
		else{
      echo'report has not submitted';
    }
   // }
       
			?>
  <div class="col-md-10 text-center" style="background-color:gray;">
		  	 <form  method="post"  action="workersreport.php"enctype="multipart/form-data">
			 	   <div class="form center-block">
				   		<div class="form-group">	              					 
							 <label for="BigTitle" style="color:#000000">planned activities</label><br />
							 <textarea class="form-control" rows="5" name="planact" required ></textarea><br />
               <label for="BigTitle" style="color:#000000">done activities</label><br />
               <textarea class="form-control" rows="5" name="doneact" required ></textarea><br />
							 <label for="BigTitle" style="color:#000000">no done activities</label><br />
               <textarea class="form-control" rows="5" name="nodoneact" required ></textarea><br />
               <label for="BigTitle" style="color:#000000">no planned activities</label><br />
               <textarea class="form-control" rows="5" name="noplanact" required ></textarea><br />
               <label for="BigTitle" style="color:#000000">problems</label><br />
               <textarea class="form-control" rows="5" name="prob" required ></textarea><br />
               <label for="BigTitle" style="color:#000000">suggestions</label><br />
               <textarea class="form-control" rows="5" name="sugg" required ></textarea><br />
               <label for="BigTitle" style="color:#000000">observations</label><br />
               <textarea class="form-control" rows="5" name="observ" required ></textarea><br />
               <label for="BigTitle" style="color:#000000">done by</label><br />
               <input type="text" class="form-control" rows="1" name="worker" placeholder="your names" required ><br />
               <label for="BigTitle" style="color:#000000">Post</label><br />
               <input type="text"class="form-control" rows="1" name="post" placeholder="your work" required ><br />
               <label for="BigTitle" style="color:#000000">comments</label><br />
               <textarea class="form-control" rows="5" name="comment" required ></textarea><br />
							 </div>
						<input type="submit" value="submit" name="Sub">
				   </div>
			 </form>
    </div>
        </div>
      </div>
    </div>

    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
