<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset=utf-8 />
  <title>Workshop Epsicoin</title>
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
<div class="ui tiny pointing menu">
  <a class="item active">
    <?php
    echo $_SESSION['identifiant'];
    ?>
  </a>
  <div class="right menu">
    <a class="item">
      <i class="blue circle icon"></i>5 minute
      <div class="floating ui blue label" position="bottom">12</div>
    </a>
    <a class="item">
      <i class="red circle icon"></i>15 minute
      <div class="floating ui red label">3</div>
    </a>
    <a class="item">
      <i class="green circle icon"></i>30 minute
      <div class="floating ui green label">11</div>
    </a>
    <a class="item" href="deconnexion.php">
      <i class="red power off icon"></i>Logout
    </a>
  </div>
</div>

<body>
  <div class="ui tiny segment" data-tab="first/b">
    <div class="ui cards">
      <div class="teal card">
        <div class="content">
          <div class="header">Nom du groupe</div>
          <div class="description">
            Apprenant 1, Apprenant 2 etc...
          </div>
        </div>
        <div class="ui show button" id="b1">
          <i class="plus icon"></i>Créer une groupe
        </div>
      </div>
      <div class="teal card">
        <div class="content">
          <div class="header">Groupe 5 </div>
          <div class="description">
            <div class="ui comments">
              <div class="comment">
                <a class="avatar">
                  <img class="ui avatar image" src="http://semantic-ui.com/images/avatar/small/jenny.jpg">
                </a>
                <div class="content">
                  <a class="author">Louis</a>
                </div>
              </div>
            </div>
            <div class="ui comments">
              <div class="comment">
                <a class="avatar">
                  <img class="ui avatar image" src="http://semantic-ui.com/images/avatar/small/jenny.jpg">
                </a>
                <div class="content">
                  <a class="author">Nadir</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ui show button" id="b1">
          <i class="plus icon"></i>Details
        </div>
      </div>
    </div>
    <div class="ui divider"></div>

    <div class="ui modal" id="modal1">
      <i class="close icon"></i>
      <div class="header">
        <a class="ui large blue tag centered label">
          <h3>--CREATION DE GROUPE--</h3>
        </a>
      </div>
      <br>
      <div class="ui left labeled left icon input">
        <i class="adress card icon"></i>
        <input type="text" placeholder="Name">
        <a class="ui tag label">
          Nom du groupe
        </a>
      </div>
      <br>
      <select name="skills" class="ui fluid dropdown" multiple="">
        <?php
          //connection
          $bdd = new PDO('mysql:host=localhost;dbname=EPSICoin;charset=utf8', 'root', 'root');

          //get message
          $query=$bdd->prepare("SELECT * FROM etudiant");
          $query->execute(); 
          // Loop through the query results, outputing the options one by one
          while ($fetch=$query->fetch(PDO::FETCH_ASSOC)) {
             echo "<option value='".$fetch['Prenom']."'>".$fetch['Prenom']."</option>";
          }
        ?>
        <!--option value="">Utilisateurs</option>
        <option value="angular">Angular</option>
        <option value="css">CSS</option>
        <option value="design">Graphic Design</option>
        <option value="ember">Ember</option>
        <option value="html">HTML</option>
        <option value="ia">Information Architecture</option>
        <option value="javascript">Javascript</option>
        <option value="mech">Mechanical Engineering</option>
        <option value="meteor">Meteor</option>
        <option value="node">NodeJS</option>
        <option value="plumbing">Plumbing</option>
        <option value="python">Python</option>
        <option value="rails">Rails</option>
        <option value="react">React</option>
        <option value="repair">Kitchen Repair</option>
        <option value="ruby">Ruby</option>
        <option value="ui">UI Design</option>
        <option value="ux">User Experience</option-->
      </select>
      <div class="actions">
        <div class="ui black deny button"> Fermer </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="ui show button nadon" id="b2">
      Contacter un intervenant ?
    </div>

    <div class="ui modal" id="modal2">
      <i class="close icon"></i>
      <div class="header">
        <a class="ui large blue tag centered label">
          <h3>--CONTACER UN INTERVENANT--</h3>
        </a>
      </div>
      <br>
      <br>
      <select name="skills" class="ui fluid dropdown" multiple="">
        <option value="">Utilisateurs</option>
        <option value="angular">Angular</option>
        <option value="css">CSS</option>
        <option value="design">Graphic Design</option>
        <option value="ember">Ember</option>
        <option value="html">HTML</option>
        <option value="ia">Information Architecture</option>
        <option value="javascript">Javascript</option>
        <option value="mech">Mechanical Engineering</option>
        <option value="meteor">Meteor</option>
        <option value="node">NodeJS</option>
        <option value="plumbing">Plumbing</option>
        <option value="python">Python</option>
        <option value="rails">Rails</option>
        <option value="react">React</option>
        <option value="repair">Kitchen Repair</option>
        <option value="ruby">Ruby</option>
        <option value="ui">UI Design</option>
        <option value="ux">User Experience</option>
      </select>
      <div class="actions">
        <div class="ui black deny button"> Fermer </div>
      </div>
    </div>

    <table class="ui celled table">
      <thead>
        <tr>
          <th>Nom de l'intervenant</th>
          <th>Nom du projet</th>
          <th>Question</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div>
              <a class="avatar">
                <img class="ui avatar image" src="http://semantic-ui.com/images/avatar/small/jenny.jpg">
              </a>Nadir</div>
          </td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <td>
            <div>
              <a class="avatar">
                <img class="ui avatar image" src="http://semantic-ui.com/images/avatar/small/jenny.jpg">
              </a>Cristofer
            </div>
          </td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <td>
            <div>
              <a class="avatar">
                <img class="ui avatar image" src="http://semantic-ui.com/images/avatar/small/jenny.jpg">
              </a>Benoit
            </div>
          </td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="3">
            <div class="ui right floated pagination menu">
              <a class="icon item">
                <i class="left chevron icon"></i>
              </a>
              <a class="item">1</a>
              <a class="item">2</a>
              <a class="item">3</a>
              <a class="item">4</a>
              <a class="icon item">
                <i class="right chevron icon"></i>
              </a>
            </div>
          </th>
        </tr>
      </tfoot>
    </table>
  </div>

</body>

<script>
  $('#modal1').modal('attach events', '#b1', 'show');
  $('#modal2').modal('attach events', '#b2', 'show');
  $('.ui.dropdown')
    .dropdown({
      direction: 'upward'
    })
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
</style>

</html>