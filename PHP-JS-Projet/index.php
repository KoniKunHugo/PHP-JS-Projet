<!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
      <title>Lobby</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/style.css"/>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="Huge project of 2 nobodies on Earth"/>
      <!-- <meta name="icon" href=""/> -->
    </head>
   
    <body class="grey">
        <nav class="grey darken-1">
          <div class="nav-wrapper">
            <div class="container">
              <a href="#" data-target="slide-out" class="sidenav-trigger btn-floating pulse waves-effect waves-light"><i class="material-icons">menu</i></a>
              <!-- <php -->
              <!-- if isset:(user)==1; -->
                <a href="#" class="brand-logo hide-on-large-only">Salutation vagabond</a>
              <!-- //> -->
              <ul class="hide-on-med-and-down">
                <div class="left-align">
                  <li><a href="index.php"><i class="material-icons">home</i></a></li>
                </div>
                <div class="center">
                  <li><a class="waves-effect" href="project-1.php">Projet 1</a></li>
                  <li><a class="waves-effect" href="project-2.php">Projet 2</a></li>
                  <li><a class="waves-effect" href="project-3.php">Projet 3</a></li>
                  <li class="row">
                    <input id="myText" class="black-text col l10" placeholder="Send a review">
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
        
      
        <div class="center">
          <h1 class="hide-on-med-and-down">Accueil</h1> 
        </div>

        
        <div class="carousel carousel-slider center">
          <div class="carousel-fixed-item l-r ">
            <div class="r-align">
              <a id="btn-next" class="waves-effect black-text btn-flat next">
                <i class="material-icons">keyboard_arrow_right</i>
              </a>
            </div>
            <div class="l-align">
              <a id="btn-prev" class="waves-effect black-text btn-flat prev">
                <i class="material-icons">keyboard_arrow_left</i>
              </a>
            </div>
          </div>
          <!-- Violet -->
          <a href="project-1.php"><div class="carousel-item grey lighten-1 white-text" href="#one!">
            <img src="img/morpion.jpg" class="morpion">
            <h2>First project</h2>
            <p class="white-text">This is the first project</p>
          </div></a>
          <!-- Gris -->
          <a href="project-2.php"><div class="carousel-item p2 grey lighten-1 white-text" href="#two!">
            <img src="img/conferences.webp" class="conf">
            <h2>Second project</h2>
            <p class="white-text">This is the second project</p>
          </div></a>
          <!-- Dark -->
          <a href="project-3.php"><div class="carousel-item grey lighten-1 white-text" href="#three!">
            <img src="img/twitch.webp" class="twitch">
            <h2>Third Project</h2>
            <p class="white-text">This is the third project</p>
          </div></a>
        </div>
        <div class="parallax-container">
          <div class ="parallax">
            <img src="img/fond.jpg" alt="star background" class="responsive-img">
          </div>
        </div>
           <div class="row">
             <div class="col s12 l4">
              <h2 class="indigo-text text-darken-4">What we carved until now...</h2>
             </div>
              <div class="card col s12 m8 offset-s1 z-depth-3">
               <div id=" chad-1" class="card-image img-card waves-effect waves-block waves-light">
                 <img class="activator" src="img/bg.jpg">
               </div>
               <div class="card-content">
                 <span class="card-title activator grey-text text-darken-4">
                   Tristan BODA
                 </span>
               </div>
               <div class="card-reveal">
                 <span class="card-title grey-text text-darken-4">Tristan BODA<i class="material-icons right">close</i></span>
                 <p>Études : Bac STI2D spécialité SIN</p>
                 <p>Lieu de vie : Lyon</p>
                 <p>Aime : programmer, nager, les jeux vidéos</p>
               </div>
             </div>
             <div class="card col s12 m8 offset-s1 z-depth-3">
               <div class="card-image img-card chad-2 waves-effect waves-block waves-light">
                 <img class="activator" src="img/man.png">
               </div>
               <div class="card-content">
                 <span class="card-title activator grey-text text-darken-4">
                   Hugo XIA
                 </span>
               </div>
               <div class="card-reveal">
                 <span class="card-title grey-text text-darken-4">Hugo XIA<i class="material-icons right">close</i></span>
                 <p>Études : Étudiant</p>
                 <p>Lieu de vie : Lyon</p>
                 <p>Aime : La musique, cuisiner, les jeux-vidéo, et plus encore.</p>
               </div>
             </div>
           </div>
           
           <img id="image" onclick="changeimage()" src="img/dollar.png">
      <footer class="grey darken-3">
      <div class="foot-container white-text">
        <p>
          Copyright &copy; Hugo XIA - Tristan BODA - 2022-2023 - All Rights Reserved
          <div>
            <button id="disparition" onclick="show()">Disparition Ninja</button>
          </div>
        </p>

      </div>
    </footer>

      <script type="text/javascript" src="js/jquery.min.js"></script>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <!-- Script at the end need query + materialize-->
      <script type="text/javascript" src="js/script.js"></script>
    </body>
    
  </html>
