<html>
    <head>
        <html lang="en">
            <head>
              <meta charset="UTF-8" />
              <meta name="viewport" content="width=device-width, initial-scale=1.0" />
              <meta http-equiv="X-UA-Compatible" content="ie=edge" />
              <title>Snake game</title>
              <link rel="stylesheet" type="text/css" href="./styles/styles.css" />
        
    </head>
    <body>
        <div class="nav_container nav_container_about">
            <div id="avatar_container_about">
              <img
                id="avatar_about"
                src="./image/267.jpg"
                alt="adnan"
                obj
              />
            </div>
            <div class="nav_link_container">
            <a class="nav_link" href="./index.php">Home</a>
            </div>
            <div class="nav_link_container">
              <a class="nav_link" href="./about.php">About</a>
            </div>
            <div class="nav_link_container">
              <a class="nav_link nav_link_selected" href="./snake.php">Play Snake</a>
            </div>
            <div class="nav_link_container">
              <a class="nav_link" href="./index.php">Quit</a>
            </div>
          </div>
          <div class="about_body">
              <div class="about_pane">
    <canvas id="snake" width="608" height="608"></canvas>
    <script src="js/snake.js"></script>
  </div>
</div>
  </body>
</html>