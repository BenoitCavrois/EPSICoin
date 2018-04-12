<?php
   ob_start();
   session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Workshop 2 G5 :)</title>
</head>

<body>

  <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script src="Semantic-UI-CSS-master/semantic.min.js"></script>
  <script src="Semantic-UI-CSS-master/semantic.js"></script>
  <link rel="stylesheet" href="Semantic-UI-CSS-master/semantic.css" type="text/css" />
  <link rel="stylesheet" href="Semantic-UI-CSS-master/semantic.min.css" type="text/css" />

  <div class="ui middle aligned center aligned grid">
    <div class="column">
      <h2 class="ui teal image header">
        <div class="content">
          Workshop 2 G5 !
        </div>
      </h2>
      <form class="ui large form" action="connection.php" method="post">
        <div class="ui stacked segment">
          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" name="identifiant" placeholder="Identifiant">
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input type="password" name="password" placeholder="Password">
            </div>
          </div>
          <input class="ui button"type='submit' name="validateButton" value='Se connecter'/>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
<style>
  body {
    background-color: rgb(194, 191, 191);
  }

  body>.grid {
    height: 100%;
  }

  .image {
    margin-top: -100px;
  }

  .column {
    max-width: 450px;
  }

  .ui.teal.button,
  .ui.teal.buttons .button {
    background-color: #128882;
    color: #fff;
    text-shadow: none;
    background-image: none;
  }
</style>
