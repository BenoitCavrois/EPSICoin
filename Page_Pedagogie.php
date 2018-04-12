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
  <a class="item active">
    Nom du responsable pédagogique
  </a>
  <div class="right menu">
    <a class="item">
      <i class="red power off icon"></i>Logout
    </a>
  </div>
</div>

<body>
  <div class="ui modal" id="modal1">
    <i class="close icon"></i>
    <div class="header">
      <a class="ui large blue tag centered label">
        <h3>--CREATION DE PROJET--</h3>
      </a>
    </div>
    <br>
    <br>
    <br>
    <div class="ui left labeled left icon input">
      <i class="adress card icon"></i>
      <input type="text" placeholder="Name Intervenant">
      <a class="ui tag label">
        Choix de l'intervenant
      </a>
    </div>
    <br>
    <select class="ui fluid dropdown" multiple="">
      <option value="">Choix d'un intervenant</option>
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
    <div class="ui tiny segment" data-tab="first/b">
      <h3 class="labelJeton">Jeton par groupe</h3>
      <button class="circular ui icon button" id="Nadir">
        <i class="blue circle icon"></i>
      </button>
      <button class="circular ui icon button">
        <i class="red circle icon"></i>
      </button>
      <button class="circular ui icon button">
        <i class="green circle icon "></i>
      </button>
    </div>

    <div class="actions">
      <div class="ui black deny button"> Fermer </div>
    </div>
  </div>
  <div class="ui tiny segment" data-tab="first/b">
    <h3>PROJET EN COURS</h3>
    <div class="ui cards">
      <div class="teal card">
        <div class="content">
          <div class="header">Nom du projet</div>
          <div class="description">
            Apprenant 1, Apprenant 2 etc...
          </div>
        </div>
        <div class="ui show button" id="b1">
          <i class="plus icon"></i>Créer un projet
        </div>
      </div>
      <div class="teal card">
        <div class="content">
          <div class="header">Nom du projet</div>
          <div class="description">
            Apprenant 1, Apprenant 2 etc...
          </div>
        </div>
        <div class="ui show button">
          <i class="plus icon"></i>Créer un projet
        </div>
      </div>
      <div class="teal card">
        <div class="content">
          <div class="header">Nom du projet</div>
          <div class="description">
            Apprenant 1, Apprenant 2 etc...
          </div>
        </div>
        <div class="ui show button">
          <i class="plus icon"></i>Créer un projet
        </div>
      </div>
      <div class="teal card">
        <div class="content">
          <div class="header">Nom du projet</div>
          <div class="description">
            Apprenant 1, Apprenant 2 etc...
          </div>
        </div>
        <div class="ui show button">
          <i class="plus icon"></i>Créer un projet
        </div>
      </div>
      <div class="teal card">
        <div class="content">
          <div class="header">Nom du projet</div>
          <div class="description">
            Apprenant 1, Apprenant 2 etc...
          </div>
        </div>
        <div class="ui show button">
          <i class="plus icon"></i>Créer un projet
        </div>
      </div>
    </div>
    <div class="ui divider"></div>

    <div class="ui modal" id="modal2">
      <i class="close icon"></i>
      <div class="header">
        <a class="ui large blue tag centered label">
          <h3>--CREATION D'UN INTERVENANT--</h3>
        </a>
      </div>
      <br>
      <br>
      <br>
      <div class="ui left labeled left icon input">
        <i class="adress card icon"></i>
        <input type="text" placeholder="Name Intervenant">
        <a class="ui tag label">
          Choix de l'intervenant
        </a>
      </div>
      <br>
      <select class="ui fluid dropdown" multiple="">
        <option value="">Spécialité</option>
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

    <h3>INTERVENANT</h3>
    <div class="ui fives cards">
      <div class="teal card">
        <div class="content">
          <div class="header">Nom de l'intervenant</div>
          <div class="description">
            Apprenant 1, Apprenant 2 etc...
          </div>
        </div>
        <div class="ui show button" id="b2">
          <i class="plus icon"></i>Créer un intervenant
        </div>
      </div>
      <div class="black card">
        <div class="content">
          <div class="header">Nom de l'intervenant</div>
          <div class="description">
            Apprenant 1, Apprenant 2 etc...
          </div>
        </div>
        <div class="ui show button">
          <i class="plus icon"></i>Créer un intervenant
        </div>
      </div>
      <div class="blue card">
        <div class="content">
          <div class="header">Nom de l'intervenant</div>
          <div class="description">
            Apprenant 1, Apprenant 2 etc...
          </div>
        </div>
        <div class="ui show button">
          <i class="plus icon"></i>Créer un intervenant
        </div>
      </div>
      <div class="red card">
        <div class="content">
          <div class="header">Nom de l'intervenant</div>
          <div class="description">
            Apprenant 1, Apprenant 2 etc...
          </div>
        </div>
        <div class="ui show button">
          <i class="plus icon"></i>Créer un intervenant
        </div>
      </div>
      <div class="teal card">
        <div class="content">
          <div class="header">Nom de l'intervenant</div>
          <div class="description">
            Apprenant 1, Apprenant 2 etc...
          </div>
        </div>
        <div class="ui show button">
          <i class="plus icon"></i>Créer un intervenant
        </div>
      </div>
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

  .labelJeton {
    text-align: center;
  }

  .ui.tiny.segment {
    text-align: center;
  }
</style>

</html>
