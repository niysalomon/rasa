<div class="table-responsive">
            <table border="1" class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Firstname</th>
                  <th>Lastname</th>                
                  <th>cell </th>
                  <th>membership</th>                  
                  <th>Telephone</th>
                  <th>E-mail</th>                  
                  <th>College</th>
                  <th>Department</th>
                  <th>Level</th>
                  <th>Photo</th>
                 <th>Decision</th>
                </tr>
              </thead>
              <tbody>
              <?php
                include('../connection.php');
                $Result=mysqli_query( $conn,"SELECT * FROM christian;");

                  while($row=mysqli_fetch_array($Result))
                  {
                    echo '
                        <tr>
                          <td>'.$row["Id"].'</td>
                          <td>'.$row["firstname"].'</td>
                          <td>'.$row["lastname"].'</td>
                          <td>'.$row["cell"].'</td>
                          <td>'.$row["work"].'</td>
                          <td>'.$row["tel"].'</td>
                          <td>'.$row["email"].'</td>
                          <td>'.$row["college"].'</td>
                          <td>'.$row["department"].'</td>
                          <td>'.$row["level"].'</td>                         
                          
                          <td><img style="width:60px;height:60px" class="img-responsive" src="../img/'.$row["photo"].'"</td>
                          <td><p><a href="Editable2.php? id='.$row['Id'].'" class="btn btn-primary">Edit</button><a href="deletechr.php?del='.$row["Id"].'" class="btn btn-danger">Delete</a></p></td></tr>';
                  }
                ?>
               
              </tbody>
            </table>
          </div>