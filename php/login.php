<?php>

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Florida Fishing</title>
    <link href="css/style.css" rel="stylesheet">
  </head>
  
<!-- NAVBAR ================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php">Fishing Florida</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="spots.html">Spots</a></li>
                <li><a href="alvaro.html">Alvaro</a></li>
                <li><a href="kevin.html">Jokes</a></li>
                <li><a href="ibrahim.html">Tides</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="login.php">Login</a></li>
                <li><a href="joinMember.php">Become a Member</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Main Page Content
    ================================================== -->

    <div class="container marketing">

      
      <!-- here is the content-->

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Login <span class="text-muted">to see the blog!</span></h2>
          <p class="lead">Please type in your username and password.</p>
          <form class="pad" name="loginInfo" action="processLogin.php" method="post">
            Username: <input type="text" name="lUsername" maxlength="20" /> <br />
            Password: <input type="text" name="lPassword" maxlength="20" /> <br />
            <input type="submit" name="submit" value="Submit Login Info" /> 
          </form>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="http://stockfresh.com/files/a/anatolym/m/18/144240_stock-photo-3d-small-people---fisherman-and-fish.jpg" alt="Generic placeholder image">
        </div>
      </div>
     
      <hr class="featurette-divider">

      <!-- FOOTER -->
      <footer>
        
        <p>&copy; 2014 Florida Fishing, Inc. &middot; <a href="terms.html">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  </body>
</html>
