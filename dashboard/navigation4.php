<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
          <?php 
            echo $_SESSION['name']; 
            ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index2.php">Dashboard</a></li>
            <li class="active"><a href="#">Post</a></li>
            <li><a href="profile22.php">Edit</a></li>
            <li><a href="../index.php">Log out</a></li>
          </ul>
        </div>
      </div>
    </nav>