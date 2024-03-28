<html>
<head>
	
	<link rel="stylesheet"type="text/css" href="/background.css" media="screen" />
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    

    <!-- Note there is no responsive meta tag here -->

    

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/non-responsive.css" rel="stylesheet">
    
	<style>
		div{
  			height: 400px;
  			width: 800px;
  			background: grey;
  			border-radius: 5px;
  			position: absolute;
    		top: 25%;
    		left: 25%;
    		
 			}
		.box{
		  box-shadow: 5px 5px rgba(0, 0, 0, 0.5); 
		
		}
	</style>
</head>
<body>
	<div class="box">
		
		  <h2>Leaderboard</h2>
			  
			  <table class="table table-striped">
			  	
			  	<thead>
				  	<th style="width:5%;">Pos</th>
				  	<th style="width:50%;">Name</th>
				  	<th>Score</th>
				  	<th>Time</th>
				  	<th># of Attempts</th>
			  	</thead>
			  	
			  	<tbody>
			  	
			  	
			  	</tbody>
			  	
			  </table>
			  
			  
		  </div>

		  		  
	 

    



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="database.js"></script>
    <script src="leaderboard.js"></script>
  </body>
</html>
