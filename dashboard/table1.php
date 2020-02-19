<div class="table-responsive">
            <table border="1" class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Gender</th>
                  <th>District</th>
                  <th>Parish</th>
                  <th>Local Church</th>
                  <th>Post</th>                  
                  <th>Telephone</th>
                  <th>E-mail</th>                  
                  <th>Picture</th>                  
                </tr>
              </thead>
              <tbody>
              <?php
                include('../connection.php');
                $Result=mysqli_query( $conn,"SELECT * FROM workers");

                  while($row=mysqli_fetch_array($Result))
                  {
                    echo '
                        <tr>
                          <td>'.$row["id"].'</td><td>'.$row["fname"].'</td>
                          <td>'.$row["lname"].'</td><td>'.$row["gender"].'</td>
                          <td>'.$row["distr"].'</td>
                          <td>'.$row["parish"].'</td>
                          <td>'.$row["lochurch"].'</td><td>'.$row["post"].'</td><td>'.$row["tel"].'</td><td>'.$row["email"].'</td><td><img style="width:60px;height:60px" class="img-responsive" src="../img/'.$row["photo"].'"</td>';
                    echo  '<td><p><button class="btn btn-primary">Edit</button><a href="delete1.php?del='.$row["id"].'" class="btn btn-danger">Delete</a></p></th>
                        </tr>';
                  }
                ?>
                
              </tbody>
            </table>
          </div>