<!DOCTYPE html>

<html lang="en">
	<head>
		

		
	</head>

	<body>
		 <table class="table">
                  
                  <?php
                  include('connection.php');
                  $count = 0;
                  $title = array(" "," "," ");
                  $file = array(" "," "," ");
                  $pipsql = mysqli_query($conn,"SELECT Name,file,date FROM bfiles ORDER BY id DESC");
                  while(($myrow = mysqli_fetch_array($pipsql))&&($count<900)){
                    $title[$count]=$myrow['Name'];
                    $file[$count]=$myrow['file'];
                    $date[$count]=$myrow['date']
                      ;
                  
                    echo'<tr>
                        <td>Download: <a href="'.$file[$count].'">'.$title[$count].'</a></td><td>'.$date[$count].'</td>
                        
                      </tr>';
                  }
                  $count++
                  ?>
                </table>
	</body>
</html>
