<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        header('Location:index.php');
    }

    require_once 'assets/bd/config.php';
    require_once 'assets/bd/bd.php';
    include 'assets/includes/function.php';

    $FilmDeCettePage = null;
    
    if(isset($_GET['pages'])){

        $getFilm = htmlspecialchars($_GET['pages']);
        foreach($dataFilm as $row){
            if ($row['id_film']==$getFilm) {
                $FilmDeCettePage = $row;
            }
        }

        if ($FilmDeCettePage == null){
            header("Location:home.php");
        }

    }else{
        header("Location:home.php");
    }
    $acteur= ('SELECT * FROM film
        INNER JOIN jouer ON film.id_film = jouer.id_film
        INNER JOIN acteur ON acteur.id_acteur = jouer.id_acteur');

        $requeteActeurFilm = $bdd->query($acteur);
        $dataActeur = $requeteActeurFilm->fetchAll();

    $realisateur= ('SELECT * FROM film
        INNER JOIN realiser ON film.id_film = realiser.id_film
        INNER JOIN realisteur ON realisteur.id_realisateur = realiser.id_realisateur');

        $requeteRealisateurFilm = $bdd->query($realisateur);
        $dataRealisateur = $requeteRealisateurFilm->fetchAll();
?>
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
<body id="home-background" style="color: white;">

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
                        <li><input id="searchbar-home" type="text" name="search" placeholder="Trouvez un film.."></li>
                        <li><a href="assets/bd/deconnexion.php" class="btn-small connexion-btn">Deconnexion</a></li>
                    </ul>
                </div>
                <ul class="sidenav" id="mobile-menu">
                    <li><a href="home.php">Accueil</a></li>
                    <li><a href="assets/bd/deconnexion.php" class="btn-small connexion-btn">Deconnexion</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- bannière -->
    <div id="banniere" data-aos="fade-right" style='background: url(assets/img/affiche/<?php echo $FilmDeCettePage['affiche_film']?>) center no-repeat; background-size: cover;'>

    </div>

    <div id="apropos-film" data-aos="zoom-in-up">
        <div id="resume-film"><h2>Résumé</h2><p><?php echo $FilmDeCettePage['synopsis_film']?></p></div>
        <div id="info-film"><h2>Info</h2>
            <p> Titre : <?php echo $FilmDeCettePage['titre_film']?><br></p>
            <p> Date : <?php echo $FilmDeCettePage['date_film']?><br></p>
            <p> Durée : <?php echo DureeFilm($FilmDeCettePage['duree_film'])?><br></p>
            <p> Note : <?php echo $FilmDeCettePage['note_film']?>%<br></p>
            <p> Classification : +<?php echo $FilmDeCettePage['classification_film']?><br></p>
        </div>
        <div id="equipe-film"><h2>Équipe du film</h2>
        <h5>Réalisateur:</h5>
            <p>
                <?php
                    foreach ($dataRealisateur as $row){
                        if($FilmDeCettePage['id_film'] == $row['id_film']) {?>
                        <a href="realisateur.php?realisateur=<?php echo $row['id_realisateur']?>"><?php
                        
                            echo $row['prenom_realisateur'].' ';
                            echo $row['nom_realisateur'].'<br>';
                        }
                    }
                ?>
            </a></p>
        <h5>Acteurs Principaux:</h5>
            <p><?php
                    foreach ($dataActeur as $row){
                        if($FilmDeCettePage['id_film'] == $row['id_film']) {?>
                            <a href="acteur.php?acteur=<?php echo $row['id_acteur']?>"><?php
                        
                            echo $row['prenom_acteur'].' ';
                            echo $row['nom_acteur'].'<br>';
                        }
                    }
                ?>
            </a></p></div>
    </div>

    <div id="BA-film">
        <h2 data-aos="fade-right"><?php echo $FilmDeCettePage['titre_film']?></h2>
        <iframe width="1424" height="548" src="https://www.youtube.com/watch?v=gHt8tCHbB2M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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