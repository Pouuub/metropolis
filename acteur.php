<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        header('Location:index.php');
    }

    require_once 'assets/bd/config.php';
    require_once 'assets/bd/bd.php';

    $acteur= ('SELECT * FROM film
        INNER JOIN jouer ON film.id_film = jouer.id_film
        INNER JOIN acteur ON acteur.id_acteur = jouer.id_acteur');

        $requeteActeurFilm = $bdd->query($acteur);
        $dataActeur = $requeteActeurFilm->fetchAll();

    $ActeurDeCettePage = null;
    
    if(isset($_GET['acteur'])){

        $getActeur = htmlspecialchars($_GET['acteur']);
        foreach($dataActeur as $row){
            if ($row['id_acteur']==$getActeur) {
                $ActeurDeCettePage = $row;
            }
        }

        if ($ActeurDeCettePage == null){
            header("Location:home.php");
        }

    }else{
       header("Location:home.php");
    }
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

    <div class="container" id="real-div" data-aos="fade-right" data-aos-duration="500">
        <img id="real_photo" src="assets/img/acteur/<?php echo $ActeurDeCettePage['photo_acteur']?>.jpeg" alt="">
        <div id="info-real">
            <h2><?php echo $ActeurDeCettePage['prenom_acteur']. ' ' .$ActeurDeCettePage['nom_acteur']?></h2>
            <h4>Info :</h4>
            <p>Age : <?php echo $ActeurDeCettePage['age_acteur']?> ans</p>
            <p>Date de naissance : <?php echo $ActeurDeCettePage['naissance_acteur'] ?></p>
            <p>Origine : <?php echo $ActeurDeCettePage['nationnalite_acteur'] ?></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa id quisquam, sapiente, rem adipisci quos quo eius, placeat iste quis amet doloribus! Ea, dolorum dolore velit et eius maxime? Id.
            Assumenda fugiat voluptatem, laudantium non sed quidem nemo veritatis sit iure eaque ea magnam animi necessitatibus quam enim voluptatum voluptatibus minus doloribus! Quasi nulla officiis consectetur quia. Iusto, corporis dolorem.
            Provident reprehenderit, tempora temporibus tenetur sequi, at quidem unde numquam architecto laudantium enim, atque neque dolore nisi eos quaerat eveniet aut quas? At fuga consectetur accusantium architecto vero fugiat totam!
            Necessitatibus itaque, veritatis tenetur, blanditiis numquam quas earum quod asperiores voluptatibus, cupiditate alias. Ipsa laboriosam quibusdam libero eaque unde eius consequatur beatae eligendi reprehenderit necessitatibus. Natus nemo perferendis sed autem.
            Consectetur eaque inventore aut at cum nesciunt beatae voluptatem, harum quis, tempora cumque et molestiae voluptas rerum ab incidunt asperiores sunt, soluta distinctio necessitatibus!</p>
        </div>
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