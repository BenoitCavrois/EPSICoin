<!DOCTYPE HTML>
<html>

<head>
  <meta charset=utf-8 />
  <title>Epreuve E6</title>
  <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script src="Semantic-UI-CSS-master/semantic.min.js"></script>
  <script src="Semantic-UI-CSS-master/semantic.js"></script>
  <link rel="stylesheet" href="Semantic-UI-CSS-master/semantic.css" type="text/css" />
  <link rel="stylesheet" href="Semantic-UI-CSS-master/semantic.min.css" type="text/css" />
</head>
<!--NAVBAR-->
<div class="ui teal pointing tiny menu">
  <a href="../../Projet Workshop/Page/Page_Intervenant.html" class="item active">
    Nom de l'intervenant
  </a>
  <a class="item">
    Historisation
  </a>
  <div class="right menu">
    <a class="item">
      <i class="red power off icon"></i>Logout
    </a>
  </div>
</div>

<body>
  <div class="ui tiny segment" data-tab="first/b">

    <table class="ui table">
      <thead>
        <tr>
          <th>Nom du groupe</th>
          <th>Nom du projet</th>
          <th>Temps de conversation</th>
          <th class="right aligned">Jeton utiliser</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>John</td>
          <td>Approved</td>
          <td>1h35 minute</td>
          <td class="right aligned">
            <a href="https://appear.in">
              <button class="circular ui icon button">
                <i class="blue circle icon"></i>12
              </button>
            </a>
            <button class="circular ui icon button">
              <i class="red circle icon"></i> 2
            </button>
            <button class="circular ui icon button">
              <i class="green circle icon"></i>1
            </button>
          </td>
        </tr>
        <tr>
          <td>Jamie</td>
          <td>Approved</td>
          <td>1h35 minute</td>
          <td class="right aligned">
            <a href="https://appear.in">
              <button class="circular ui icon button">
                <i class="blue circle icon"></i>12
              </button>
            </a>
            <button class="circular ui icon button">
              <i class="red circle icon"></i> 2
            </button>
            <button class="circular ui icon button">
              <i class="green circle icon"></i>1
            </button>
          </td>
        </tr>
        <tr>
          <td>Jill</td>
          <td>Denied</td>
          <td>1h35 minute</td>
          <td class="right aligned">
            <a href="https://appear.in">
              <button class="circular ui icon button">
                <i class="blue circle icon"></i>12
              </button>
            </a>
            <button class="circular ui icon button">
              <i class="red circle icon"></i> 2
            </button>
            <button class="circular ui icon button">
              <i class="green circle icon"></i>1
            </button>
          </td>
        </tr>
        <tr>
          <td>John</td>
          <td>Approved</td>
          <td>1h35 minute</td>
          <td class="right aligned">
            <a href="https://appear.in">
              <button class="circular ui icon button">
                <i class="blue circle icon"></i>12
              </button>
            </a>
            <button class="circular ui icon button">
              <i class="red circle icon"></i> 2
            </button>
            <button class="circular ui icon button">
              <i class="green circle icon"></i>1
            </button>
          </td>
        </tr>
        <tr>
          <td>Jamie</td>
          <td>Approved</td>
          <td>1h35 minute</td>
          <td class="right aligned">
            <a href="https://appear.in">
              <button class="circular ui icon button">
                <i class="blue circle icon"></i>12
              </button>
            </a>
            <button class="circular ui icon button">
              <i class="red circle icon"></i> 2
            </button>
            <button class="circular ui icon button">
              <i class="green circle icon"></i>1
            </button>
          </td>
        </tr>
        <tr>
          <td>Jill</td>
          <td>Denied</td>
          <td>1h35 minute</td>
          <td class="right aligned">
            <a href="https://appear.in">
              <button class="circular ui icon button">
                <i class="blue circle icon"></i>12
              </button>
            </a>
            <button class="circular ui icon button">
              <i class="red circle icon"></i> 2
            </button>
            <button class="circular ui icon button">
              <i class="green circle icon"></i>1
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</body>

<script>
  $('#modal1').modal('attach events', '#b1', 'show');
  $('#modal2').modal('attach events', '#b2', 'show');
  $('.ui.dropdown')
    .dropdown()
    ;
</script>
</body>
<style>
  .ui.pointing.menu {
    margin: 12px;
  }

  .ui.left.labeled.left.icon.input {
    margin-left: 20px;
  }

  .ui.fluid.dropdown {
    margin: 20px;
    width: 860px;

  }

  .ui.left.labeled.left.icon.input {
    width: 860px;
  }

  .floating.ui.blue.label {
    margin-top: 30px;
  }

  .ui.icon.menu {
    width: 147px;
  }

  .video.camera.icon {
    color: rgb(44, 97, 196)
  }

  .comment.icon {
    color: #30cf53
  }

  .envelope.icon {
    color: white
  }
</style>

</html>
