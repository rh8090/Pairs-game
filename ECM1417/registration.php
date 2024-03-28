<?php require("script.php") ?>
<html>
<head>
	<?php include('navbar.php'); ?>
	<!-- Setting the pages character encoding -->
	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	

	<link rel="stylesheet"type="text/css" href="/background.css" media="screen" />

	 <!-- Link to my stylesheet -->
	 <link rel="stylesheet" href="mainstyle.css">

	 

	 <?php
	 	if($username_error != null){
	 		?> <style>.username-error{display:block}</style> <?php
	 	}
	 	if($success != null){
	 		?> <style>.success{display:block}</style> <?php
	 	}
	 ?> 

	 <style>
	 	h2{
	 		text-align: center;
            color: white;
	 	}

	 	.heading{
	 		color: white;

	 	}

	 	div.avatarselection{
	 	display: flex;
  		font-size: 1.5rem;
  		justify-content: center;
  		align-items: center;
  		
	 }
	</style>

	 

	
	</head>
	<body>
	<div class="page">
		
		<!-- <h1>Displaying form errors with PHP</h1> -->

		<form action="registration.php" method="post" autocomplete="off">

			<label>Username <span>Choose a username</span> </label>
			<input type="text" name="username" value="<?php echo $username; ?>" >
			<p class="error username-error">
				<?php echo $username_error; ?>
			</p>

	
		<!---- Radio Button Starts Here ----->
		<label class="heading">Select an avatar :</label><br />
		<div class="avatarselection">
		<input name="radio" type="radio" value="smile.png"/>
				<img
		          src="smile.png"
		          value="smile.png"
		          alt="Smile Avatar"
		          class="Smile"
		          width="50"
		          height="50" /><br />
		<input name="radio" type="radio" value="smileupsidedown.png"/>
				<img
		          src="smileupsidedown.png"
		          alt="Upside down smile Avatar"
		          class="Upside down smile"
		          width="50"
		          height="50" />
		      <br />
		<input name="radio" type="radio" value="angel.png"/>
		        <img
		          src="angel.png"
		          alt="Angel Avatar"
		          class="Angel"
		          width="50"
		          height="50" />
		      <br />
		<input name="radio" type="radio" value="laughing.png"/>
				<img
		          src="laughing.png"
		          alt="Laughing Avatar"
		          class="Laughing"
		          width="50"
		          height="50" /><br/>
		<?php
		if (isset($_POST['submit'])) {
		if(isset($_POST['radio']))
		{
			$cookie_valuelog1 = $_POST['radio'];
			setcookie("avatar", $cookie_valuelog1, time() + ((86400*2) * 30), "/"); 
			echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
		}
		}
		?>
		<input name="submit" type="submit" value="Login">
		</form>
	</div>
	</div>
</body>
</html>