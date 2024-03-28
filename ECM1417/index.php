<?php
  session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		echo $_POST['name'];
	}
?>



<html>
<head>
      
      <link rel="stylesheet"type="text/css" href="/background.css" media="screen" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel=stylesheet type="text/css" href="./mainstyle.css">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


      <style>
         h1{
            text-align: center;
            color: white;
         }
         .navbar-brand{
          font-family: 'Verdana';
          font-size: 12px;
          font-weight: bold;
         }

         .navbar-nav{
          font-family: 'Verdana';
          font-size: 12px;
          font-weight: bold;
         }


         .text-center {
           text-align: center!important;
           color: white;
         }

         

      </style>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <?php
            if (!empty($_SESSION['username'])){
              echo 
              '<img style=display:block;width:50;height:50;float:right;padding:10px; src="'.$_COOKIE["avatar"].'" alt="Logo2">';
            }
            ?>
          <a class="navbar-brand" href="#http://ml-lab-4d78f073-aa49-4f0e-bce2-31e5254052c7.ukwest.cloudapp.azure.com:49389/index.php">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="http://ml-lab-4d78f073-aa49-4f0e-bce2-31e5254052c7.ukwest.cloudapp.azure.com:49389/pairs.php">Play pairs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://ml-lab-4d78f073-aa49-4f0e-bce2-31e5254052c7.ukwest.cloudapp.azure.com:49389/leaderboard.php">Leaderboard</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      

      <?php
            if (!empty($_SESSION['username'])){
                $out = '<h1>Welcome to Pairs</h1>
                        <div class="text-center">
                        <form action="http://ml-lab-4d78f073-aa49-4f0e-bce2-31e5254052c7.ukwest.cloudapp.azure.com:49389/pairs.php">
                        <button type="submit" class="btn btn-primary">Click here to play</button>
                        </form>
                        </div>';
            }else{
                $out = '
                        <div class="text-center">
                        <p>
                          You’re not using a registered session? <a href="http://ml-lab-4d78f073-aa49-4f0e-bce2-31e5254052c7.ukwest.cloudapp.azure.com:49389/registration.php"> Register now </a>
                        </p>
                        </div>';
            }
            echo $out;
            echo $_SESSION['username'];
            echo $_SESSION['avatar'];
        ?>

   </body>

</html>
