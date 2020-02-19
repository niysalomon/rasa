<html>
<head>
<style>
.back{
    background-image: url('top-bg.png');
    color: white;
}
</style>
</head>
<body>

<?php
    include('connection.php');
    if(isset($_POST['Submit1'])){
        $_sql = 'SELECT * FROM christian
                WHERE pass="'.$_POST['pass'].'" AND user="'.$_POST['user'].'"';
        $result=mysqli_query($conn,$_sql);
        $row=mysqli_fetch_array($result)or die('
                <form method="post" action="index.php" enctype="multipart/form-data">
                    <h3 style="color:red" align="center">Incorrect password Try again later</h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="user" class="form-control" id="exampleInputEmail1" placeholder="Username" required>
                    </div>
                                            
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>
                        <p align="center"><input type="submit" class="btn btn-success" name="Submit1" value="Login"></p>
                        <a href="register.php" align="center" class="btn btn-success"><h4>Create New Account</h4></a>
                </form>');
        while($row){
                    $_SESSION['user']=$row['user'];
                    $name1=$_SESSION['user'];
                    echo'<div class="thumbnail back"><br />

                            <p align="center"><img class="img-circle" src="img/'.$row['photo'].'" alt="No picture" height="140" width="140"></p>
                            <div class="text-center caption pcolor">
                                <h4 style="color:white"><em>Welcome '.$name1.'</em></h4>
                                <p><a class="btn btn-link" href="edit.php?$id='.$row['Id'].'">Edit Your Profile</a></p>                                                         
                                <p><a href="index.php?log='.$row['user'].'" class="btn btn-primary" role="button">Log Out</a></p>
                            </div>
                            </div>';
                            break;
        }

    }
    if(!(isset($_POST['Submit1']))){
        if(isset($_SESSION['user'])){
            $_sql = 'SELECT * FROM christian 
                WHERE user="'.$_SESSION['user'].'"';
            $result=mysqli_query($conn,$_sql);
            $myrow=mysqli_fetch_array($result);
            while($myrow){
                    echo'<div class="thumbnail back"><br />
                            <p align="center"><img class="img-circle" src="img/'.$myrow['photo'].'" alt="No picture" height="140" width="140"></p>
                            <div class="text-center caption pcolor">
                                <h4 style="color:#ffffff"><em>Welcome '.$_SESSION['user'].'</em></h4>
                                <p><a class="btn btn-link" href="edit.php?idd='.$myrow['Id'].'" style="text-decoration:inherit">Edit Your Profile</a></p>
                                
                                <p><a href="index.php?log='.$myrow['user'].'" class="btn btn-primary" role="button">Log Out</a></p>
                            </div>
                            </div>';
                            break;
                }
        }else{
            echo'<form method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" name="user" class="form-control" id="exampleInputEmail1" placeholder="Username">
                        </div>
                                                
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                        </div>
                            <p align="center"><input type="submit" class="btn btn-success" name="Submit1" value="Login" required></p>
                            <a href="register.php" align="center" <p class="btn btn-success"><h4>Create New Account</h4></p></a> 
                    </form>';
            }
        }
    
?>
</body>
</html>