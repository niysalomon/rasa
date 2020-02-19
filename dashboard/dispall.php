<div class="table-responsive">
            <table border="1" class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>paragraph</th>                               
                   <th>Fields</th>  
                   <th>Dates</th>   
                   <th>Photo</th>        
                  </tr>
              </thead>
              <tbody>
              <?php
                include('../connection.php');
                $Result=mysqli_query( $conn,"SELECT * FROM postall");

                  while($row=mysqli_fetch_array($Result))
                  {
                    echo '
                        <tr>
                          <td>'.$row["id"].'</td><td>'.$row["paragraph"].'</td>
                          <td>'.$row["dates"].'</td><td>'.$row["fields"].'</td>                        
                          <td><img style="width:60px;height:60px" class="img-responsive" src="../img/'.$row["photo"].'"
                          <td><p><button class="btn btn-primary">Edit</button><a href="deleteall.php?del='.$row["id"].'" class="btn btn-danger">Delete</a></p></th>';
                  }
                ?>
               
              </tbody>
            </table>
          </div>