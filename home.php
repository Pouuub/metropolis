<?php
    session_start();
    require_once 'assets/bd/config.php';
    require_once 'assets/bd/bd.php';

    if(!isset($_SESSION['user']))
        header('Location:index.php');

    include 'assets/includes/function.php';
    /* foreach ($dataFilm as $row) {

        echo "<br> ----- <br>";
        echo $row["id_genre"]."<br>";
        echo $row["titre_film"]."<br>";
    } */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/m-icon.png">
    <title>Metropolis</title>
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
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
                                <li><a href="#SF">SF</a></li>
                                <li class="divider"></li>
                                <li><a href="#Drame">Drame</a></li>
                                <li class="divider"></li>
                                <li><a href="#Thriller">Thriller</a></li>
                                <li class="divider"></li>
                                <li><a href="#Animation">Animation</a></li>
                            </ul>
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

<!-- caroussel -->
    <section id="home-carousel" data-aos="fade-right" data-aos-duration="500">
        <div class="carousel">
        <h2>Les plus appréciés de la critique</h2>
        <?php
            $requete=$bdd->query('SELECT * FROM film');
                while($row = $requete->fetch(PDO::FETCH_ASSOC)){
                    if ($row['note_film'] >= 95) {
                        echo "<a class='carousel-item' href='pages.php?pages=".$row['id_film']."'><img class='carousel-img' src='assets/img/affiche/".$row['affiche_film']."'>" . $row['titre_film'] . "</a>";
                    }
                }
        ?>
        </div>
    </section>

<!-- sliders -->
<section id="slider-home-section" data-aos="fade-right" data-aos-duration="500">
    <h2 class="home-genre" id="SF">SF</h2>
        <div class="home-slider">
            <?php
                foreach ($dataFilm as $row) { 
                    if ($row['id_genre'] == 1) {?>
                                <a href="pages.php?pages=<?php echo $row['id_film']?>"class='img-slider-home' style='background: url(assets/img/affiche/<?php echo $row['affiche_film']?>) center no-repeat; background-size: cover;'>


                                <div class="hover-desc"><h6><?php echo $row['titre_film']?></h6>
                                    <div class="hover-desc-button">
                                        <i class="fas fa-play"></i>
                                        <i class="fas fa-plus"></i>
                                        <i class="fas fa-thumbs-up"></i>
                                        <i class="fas fa-thumbs-down"></i>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                    <div class="hover-desc-info">
                                        <span class="hover-desc-date"><?php echo $row['date_film']?></span>
                                        <span class="hover-desc-note"><?php echo $row['note_film']?>%</span>
                                        <span class="hover-desc-age">+<?php echo $row['classification_film']?></span>
                                        <span class="hover-desc-duree"><?php echo DureeFilm($row['duree_film'])?></span>
                                        <span><?php echo ($row['genre_nom']);?></span>
                                    </div>
                                </div></a>
                        
            <?php  }}?>

        </div>
</section>

<section id="slider-home-section" data-aos="fade-right" data-aos-duration="500">
    <h2 class="home-genre" id="Drame">Drame</h2>
        <div class="home-slider">
            <?php
                foreach ($dataFilm as $row) { 
                    if ($row['id_genre'] == 2) {?>
                                <a href="pages.php?pages=<?php echo $row['id_film']?>" class='img-slider-home' style='background: url(assets/img/affiche/<?php echo $row['affiche_film']?>) center no-repeat; background-size: cover;'>


                                <div class="hover-desc"><h6><?php echo $row['titre_film']?></h6>
                                    <div class="hover-desc-button">
                                        <i class="fas fa-play"></i>
                                        <i class="fas fa-plus"></i>
                                        <i class="fas fa-thumbs-up"></i>
                                        <i class="fas fa-thumbs-down"></i>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                    <div class="hover-desc-info">
                                        <span class="hover-desc-date"><?php echo $row['date_film']?></span>
                                        <span class="hover-desc-note"><?php echo $row['note_film']?>%</span>
                                        <span class="hover-desc-age">+<?php echo $row['classification_film']?></span>
                                        <span class="hover-desc-duree"><?php echo DureeFilm($row['duree_film'])?></span>
                                        <span><?php echo ($row['genre_nom']);?></span>
                                    </div>
                                </div></a>
                        
            <?php  }}?>

        </div>
</section>

<section id="slider-home-section" data-aos="fade-right" data-aos-duration="500">
    <h2 class="home-genre" id="Thriller">Thriller</h2>
        <div class="home-slider">
            <?php
                foreach ($dataFilm as $row) { 
                    if ($row['id_genre'] == 3) {?>
                                <a href="pages.php?pages=<?php echo $row['id_film']?>" class='img-slider-home' style='background: url(assets/img/affiche/<?php echo $row['affiche_film']?>) center no-repeat; background-size: cover;'>


                                <div href="pages.php?pages=<?php echo $row['id_film']?>" class="hover-desc"><h6><?php echo $row['titre_film']?></h6>
                                    <div class="hover-desc-button">
                                        <i class="fas fa-play"></i>
                                        <i class="fas fa-plus"></i>
                                        <i class="fas fa-thumbs-up"></i>
                                        <i class="fas fa-thumbs-down"></i>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                    <div class="hover-desc-info">
                                        <span class="hover-desc-date"><?php echo $row['date_film']?></span>
                                        <span class="hover-desc-note"><?php echo $row['note_film']?>%</span>
                                        <span class="hover-desc-age">+<?php echo $row['classification_film']?></span>
                                        <span class="hover-desc-duree"><?php echo DureeFilm($row['duree_film'])?></span>
                                        <span><?php echo ($row['genre_nom']);?></span>
                                    </div>
                                </div></a>
                        
            <?php  }}?>

        </div>
</section>

<section id="slider-home-section" data-aos="fade-right" data-aos-duration="500">
    <h2 class="home-genre">Animation</h2>
        <div class="home-slider">
            <?php
                foreach ($dataFilm as $row) { 
                    if ($row['id_genre'] == 4) {?>
                                <a href="pages.php?pages=<?php echo $row['id_film']?>" class='img-slider-home' style='background: url(assets/img/affiche/<?php echo $row['affiche_film']?>) center no-repeat; background-size: cover;'>


                                <div class="hover-desc"><h6><?php echo $row['titre_film']?></h6>
                                    <div class="hover-desc-button">
                                        <i class="fas fa-play"></i>
                                        <i class="fas fa-plus"></i>
                                        <i class="fas fa-thumbs-up"></i>
                                        <i class="fas fa-thumbs-down"></i>
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                    <div class="hover-desc-info">
                                        <span class="hover-desc-date"><?php echo $row['date_film']?></span>
                                        <span class="hover-desc-note"><?php echo $row['note_film']?>%</span>
                                        <span class="hover-desc-age">+<?php echo $row['classification_film']?></span>
                                        <span class="hover-desc-duree"><?php echo DureeFilm($row['duree_film'])?></span>
                                        <span><?php echo ($row['genre_nom']);?></span>
                                    </div>
                                </div></a>
                        
            <?php  }}?>

        </div>
</section>

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
<!-- slick -->
<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="assets/js/slick.js"></script>
<!-- materilize -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $(".dropdown-trigger").dropdown();
        });
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems, options);
        });
        var options = {
            indicators: true,
            numVisible: 7,
        };
    </script>
</body>
</html>