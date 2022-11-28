<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset='utf-8'>
    <title>Project 2</title>
    <link rel='stylesheet' type='text/css' href='css/style-project.css'>
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='main.js'></script>
</head>

<body class="amber lighten-4">
  <nav class="amber">
    <div class="nav-wrapper">
      <div class="container">
        <a href="#" data-target="slide-out" class="sidenav-trigger btn-floating pulse waves-effect waves-light"><i class="material-icons">menu</i></a>
        <a href="#" class="brand-logo hide-on-large-only">Accueil</a>
        <ul class="hide-on-med-and-down">
          <li><a href="index.php"><i class="material-icons">home</i></a></li>
          <div class="center">
            <li><a class="waves-effect" href="project-1.php">Projet 1</a></li>
            <li><a class="waves-effect" href="project-2.php">Projet 2</a></li>
            <li><a class="waves-effect" href="project-3.php">Projet 3</a></li>
            <li class="row">
              <input id="myText" class="black-text col l10" placeholder="Let a message">
              <div class="col l1">
                <i  id="search" onclick="sendMail(); return false" class="btn-flat material-icons">send</i>
              </div>
            </li>
          </div>
        </ul>
      </div>
    </div>
  </nav>
    
    <ul id="slide-out" class="sidenav">
      <div class="background grey"></div>
      <li><a class="sidenav-close" href="#!"><i class="material-icons waves-effect waves-dark">close</i>Close</a></li>
      <li><a href="index.php"><i class="material-icons">home</i>Lobby</a></li>
      <li><a class="subheader">Nos histoires</a></li>
      <li><a class="waves-effect" href="project-1.php">Projet 1</a></li>
      <li><a class="waves-effect" href="project-2.php">Projet 2</a></li>
      <li><a class="waves-effect" href="project-3.php">Projet 3</a></li>
      <li><input type="text" id="myText" class="center" placeholder="Let a message">
        <i  id="send" onclick="sendMail(); return false" class="btn-flat material-icons">send</i></li>
      <li><button class="btn-flat" id="history"></button></li>
    </ul>

    <div class="row">
        <div class="col s6 offset-s3 center-align">
            <h1 class="header white-text">Projet éloquence</h1>
        </div>
    </div>

    <div class="row">
        <div class="col s8">
            <p class="text">
              But du projet éloquence...
            </p>
        </div>
        <div class="col s4 red image center-align">
            <img class="responsive-img" src="img/conferences.webp" alt="">
        </div>
    </div>
    
    <div class="row">
        <div class="col s4 blue image center-align">
            <img class="responsive-img" src="img/conferences.webp" alt="">
        </div>
        <div class="col s8">
            <p class="text">
              Discours devant plus de 100 personnes...            
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col s8">
            <p class="text">
              ce que cela nous a apporter...
            </p>
        </div>
        <div class="col s4 green image center-align">
            <img class="responsive-img" src="img/conferences.webp" alt="">
        </div>
    </div>


  <footer class="grey darken-3">
    <div class="foot-container white-text">
      <p>
        Copyright &copy; Hugo XIA - Tristan BODA - 2022-2023 - All Rights Reserved
      </p>
    </div>
  </footer>

    </body>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!-- Script at the end need query + materialize-->
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>