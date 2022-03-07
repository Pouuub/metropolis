<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/m-icon.png">
    <title>Metropolis</title>
    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body id="home-background">

<!-- navbar -->
    <header>
        <nav>
            <div class="nav-wrapper">
                <div id="navbar-home">
                    <a href="index.php" class="brand-logo"><img data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500" id="logo-navbar" src="assets/img/logo.png" alt="Logo Metropolis"></a>
                    <a href="#" class="sidenav-trigger" data-target="mobile-menu">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down nav-links-home">
                        <li><a href="home.php">Accueil</a></li>
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Genre<i class="material-icons right">arrow_drop_down</i></a></li>
                            <ul id="dropdown1" class="dropdown-content">
                                <li><a href="#!">Genre 1</a></li>
                                <li class="divider"></li>
                                <li><a href="#!">Genre 2</a></li>
                                <li class="divider"></li>
                                <li><a href="#!">Genre 3</a></li>
                            </ul>
                        <li><input id="searchbar-home" type="text" name="search" placeholder="Trouvez un film.."></li>
                        <li><a href="login.php" class="btn-small connexion-btn">Deconnexion</a></li>
                    </ul>
                </div>
                <ul class="sidenav" id="mobile-menu">
                    <li><a href="home.php">Accueil</a></li>
                    <li><a href="login.php" class="btn-small connexion-btn">Deconnexion</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- bannière -->
    <div id="banniere" data-aos="fade-right">

    </div>

    <div id="apropos-film" data-aos="zoom-in-up">
        <div id="resume-film"><h2>Résumé</h2><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima praesentium ad magni natus repudiandae pariatur minus iure, dolorem, dolor blanditiis nobis rerum facere. Illum, molestiae esse, quasi eveniet nam rerum hic corrupti blanditiis unde, animi eum suscipit enim maiores officiis?</p></div>
        <div id="info-film"><h2>Info</h2><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima praesentium ad magni natus repudiandae pariatur minus iure, dolorem, dolor blanditiis nobis rerum facere. Illum, molestiae esse, quasi eveniet nam rerum hic corrupti blanditiis unde, animi eum suscipit enim maiores officiis?</p></div>
        <div id="equipe-film"><h2>Équipe du film</h2><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima praesentium ad magni natus repudiandae pariatur minus iure, dolorem, dolor blanditiis nobis rerum facere. Illum, molestiae esse, quasi eveniet nam rerum hic corrupti blanditiis unde, animi eum suscipit enim maiores officiis?</p></div>
    </div>

    <div id="BA-film">
        <h2 data-aos="fade-right">Dune</h2>
        <iframe src="https://fr.vid.web.acsta.net/nmedia/33/21/07/22/15/19593287_hd_013.mp4" frameborder="0" allow='autoplay'></iframe>
    </div>

    <footer>
        <div id="footer">
            <img src="assets/img/logo.png" alt="logo footer">
            <p>Tous droits reservés © MetropolisVOD 2022.</p>
        </div>
    </footer>
    <!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- materilize -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $(".dropdown-trigger").dropdown();
        });
    </script>
</body>
</html>