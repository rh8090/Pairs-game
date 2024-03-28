<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="emojistyle.css">
<style>
	:root {
  --bg-color: linear-gradient();
	}


</style>
</head>
<body>

<a id="emoji1">
	<div class="canvas">
	  <div class="face">
	  	<div class="mouth"></div>
	    <div class="eyeleft">
	    </div>
	    <div class="eyeright">
	    </div>
	    </div>
	  </div>
	</div>
</a>



<li><a href="emoji1"></a></li>



<script>
	(function randommouth() {
	  const mouths = ['mouth','line','smile'];
	  const random = Math.floor(Math.random() * mouths.length);
	  //$(document).ready(function(){
	  //$("canvas").addClass(mouths[random])
	  document.querySelector('body .canvas .face .mouth').classList.add(mouths[random]);
	  
	  
	}());

	(function randomEyes() {
	  const eyes = ['eye','small','heart'];
	  const random = Math.floor(Math.random() * eyes.length);
	  if(eyes[random] == 'eye'){
	  	document.querySelector('body .canvas .face .eyeleft').classList.add('left-eye');
	  	document.querySelector('body .canvas .face .eyeright').classList.add('right-eye');

	  }
	  if(eyes[random] == 'small'){
	  	document.querySelector('body .canvas .face .eyeleft').classList.add('small-left');
	  	document.querySelector('body .canvas .face .eyeright').classList.add('small-right');

	  }
	  if(eyes[random] == 'heart'){
	  	document.querySelector('body .canvas .face .eyeleft').classList.add('heart-left');
	  	document.querySelector('body .canvas .face .eyeright').classList.add('heart-right');

	  }

	}());


	(function randomBackground() {

	  const linearGradients = [
	    "linear-gradient(to right, #c6ffdd, #fbd786, #f7797d)",
	    "linear-gradient(to right, #6a3093, #a044ff)",
	    "linear-gradient(to right, #a8ff78, #78ffd6)",
	    "linear-gradient(to right, #6d6027, #d3cbb8)",
	    "linear-gradient(to right, #4da0b0, #d39d38)",
	    "linear-gradient(to right, #74ebd5, #acb6e5)",
	    "linear-gradient(to right, #12c2e9, #c471ed, #f64f59)",
	    "linear-gradient(to right, #4b79a1, #283e51)",
	    "linear-gradient(to right, #0099f7, #f11712)"
	  ];

	  const randomColor =
	    linearGradients[Math.floor(Math.random() * linearGradients.length)];
	  document.querySelector("body").style.setProperty("--bg-color", randomColor);
	}());





</script>
</body>
</html>