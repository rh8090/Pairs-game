<html>
<head>
    <?php include('navbar.php'); ?>
      <link rel="stylesheet"type="text/css" href="/background.css" media="screen" />

      <link rel="stylesheet" href="assets/stylesog.css" />
      <script src="emojigame.js" defer></script>
    </head>
    <body>
        <div class="game">
            <div class="controls">
                <button onclick="style.display = 'none'">Start the game</button>
                <div class="stats">
                    <div class="moves">0 moves</div>
                    <div class="timer">time: 0 sec</div>
                </div>
            </div>
            <div class="board-container">
                <div class="board"></div>
                <div class="win">You won!</div>
            </div>
        </div>
    </body>
</html>

