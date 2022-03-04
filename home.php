<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<!-- caroussel -->
    <section id="home-carousel">
        <div class="carousel">
        <h2>Top 10 du moment</h2>
            <a class="carousel-item" href="pages.php"><img class="carousel-img" src="assets/img/dune-zendaya.jpeg"><p>Top 1</p></a>
            <a class="carousel-item" href="#two!"><img class="carousel-img" src="assets/img/dune-jessica.jpeg"><p>Top 2</p></a>
            <a class="carousel-item" href="#three!"><img class="carousel-img" src="assets/img/arcane.jpeg"><p>Top 3</p></a>
            <a class="carousel-item" href="#four!"><img class="carousel-img" src="assets/img/dune-zendaya.jpeg"><p>Top 4</p></a>
            <a class="carousel-item" href="#five!"><img class="carousel-img" src="assets/img/dune-zendaya.jpeg"><p>Top 5</p></a>
            <a class="carousel-item" href="#five!"><img class="carousel-img" src="assets/img/dune-zendaya.jpeg"><p>Top 6</p></a>
            <a class="carousel-item" href="#five!"><img class="carousel-img" src="assets/img/dune-zendaya.jpeg"><p>Top 7</p></a>
            <a class="carousel-item" href="#five!"><img class="carousel-img" src="assets/img/dune-zendaya.jpeg"><p>Top 8</p></a>
            <a class="carousel-item" href="#five!"><img class="carousel-img" src="assets/img/dune-zendaya.jpeg"><p>Top 9</p></a>
            <a class="carousel-item" href="#five!"><img class="carousel-img" src="assets/img/dune-zendaya.jpeg"><p>Top 10</p></a>
        </div>
    </section>

<!-- sliders -->
<section id="slider-home-section">
    <h2 class="home-genre">Genre 1</h2>
        <div class="home-slider">
            <div class="img-slider-home div1"><a href="pages.php"><h6 class="desc-film">Dune</h6></a></div>
            <div class="img-slider-home div2"></div>
            <div class="img-slider-home div3"></div>
            <div class="img-slider-home div4"></div>
            <div class="img-slider-home div5"></div>
            <div class="img-slider-home div6"></div>
            <div class="img-slider-home div7"></div>
            <div class="img-slider-home div8"></div>
            <div class="img-slider-home div9"></div>
            <div class="img-slider-home div10"></div>
            <div class="img-slider-home div11"></div>
            <div class="img-slider-home div12"></div>
        </div>

    <h2 class="home-genre">Genre 2</h2>
        <div class="home-slider">
            <div class="img-slider-home div1"></div>
            <div class="img-slider-home div2"></div>
            <div class="img-slider-home div3"></div>
            <div class="img-slider-home div4"></div>
            <div class="img-slider-home div5"></div>
            <div class="img-slider-home div6"></div>
            <div class="img-slider-home div7"></div>
            <div class="img-slider-home div8"></div>
            <div class="img-slider-home div9"></div>
            <div class="img-slider-home div10"></div>
            <div class="img-slider-home div11"></div>
            <div class="img-slider-home div12"></div>
        </div>

    <h2 class="home-genre">Genre 3</h2>
        <div class="home-slider">
            <div class="img-slider-home div1"></div>
            <div class="img-slider-home div2"></div>
            <div class="img-slider-home div3"></div>
            <div class="img-slider-home div4"></div>
            <div class="img-slider-home div5"></div>
            <div class="img-slider-home div6"></div>
            <div class="img-slider-home div7"></div>
            <div class="img-slider-home div8"></div>
            <div class="img-slider-home div9"></div>
            <div class="img-slider-home div10"></div>
            <div class="img-slider-home div11"></div>
            <div class="img-slider-home div12"></div>
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