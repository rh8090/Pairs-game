<html>
<head>
<style>
	body {
	  background-color: #25A9FC;
	}

	.canvas {
	  position: relative;
	  margin: auto;
	  margin-top: 5%;
	  width: 600px;
	  height: 420px;
	  display: block;
	  background: none;
	}

	.face {
	  position: absolute;
	  top: 16.5%;
	  left: 25%;
	  height: 67%;
	  width: 50%;
	  background-color: yellow;
	  border-radius: 50%;
	  border: solid 2px;
	  z-index: 1;
	}

	.left-eye {
	  position: absolute;
	  top: 25%;
	  left: 25%;
	  height: 55px;
	  width: 40px;
	  background-color: black;
	  border-radius: 50%;
	  z-index: 2;
	}

	.right-eye {
	  position: absolute;
	  top: 25%;
	  left: 58%;
	  height: 55px;
	  width: 40px;
	  background-color: black;
	  border-radius: 50%;
	  z-index: 2;
	}

	.mouth {
	  position: absolute;
	  top: 50%;
	  left: 30%;
	  height: 100px;
	  width: 120px;
	  background-color: black;
	  border-radius: 50%;
	  z-index: 2;
	}

	.mouth-cover {
	  position: absolute;
	  top: 50%;
	  left: 30%;
	  height: 45px;
	  width: 120px;
	  background-color: yellow;
	  z-index: 3;
	  
	}
</style>
</head>
<body>
	<div class="canvas">
  <div class="face">
    <div class="left-eye">
    </div>
    <div class="right-eye">
    </div>
    
    <div class="mouth">
    </div>
    <div class="mouth-cover">
    </div>
  </div>
</div>
</body>