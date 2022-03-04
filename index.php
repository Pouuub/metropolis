<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metropolis</title>
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
<body id="index-background">
    
    <!-- navbar -->
    <header>
        <nav>
            <div class="nav-wrapper">
                <div id="navbar">
                    <a href="index.php" class="brand-logo"><img data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500" id="logo-navbar" src="assets/img/logo.png" alt="Logo Metropolis"></a>
                    <a href="#" class="sidenav-trigger" data-target="mobile-menu">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down nav-links">
                        <li><a href="signup.php">Inscription</a></li>
                        <li><a href="login.php" class="btn-small connexion-btn">Connexion</a></li>
                    </ul>
                </div>
                <ul class="sidenav" id="mobile-menu">
                    <li id="inscription-mobile-menu"><a href="signup.php">Inscription</a></li>
                    <li id="connexion-mobile-menu"><a href="login.php">Connexion</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- slider -->
    <section id="slider">
        <div class="slider">
            <ul class="slides">
                <li class="pause">
                    <img src="assets/img/blade-runner-slider.jpeg" alt="wallpaper blade runner">
                    <div class="caption right-align">
                    <h3><span id=logo-slider>MetropolisVOD</span> arrive chez vous !</h3>
                    <h4 class="light grey-text text-lighten-3">La plateforme de tous vos plaisirs.</h4>
                    </div>
                </li>
                <li class="pause">
                    <img src="assets/img/arcane.jpeg" alt="wallpaper arcane">
                    <div class="caption left-align">
                    <h3>Jusqu'à 4 écrans simultanés</h3>
                    <h4 class="light grey-text text-lighten-3">Une offre des plus profitables.</h4>
                    </div>
                </li>
                <li class="pause">
                    <img src="assets/img/avatar.jpeg" alt="wallpaper avatar">
                    <div class="caption right-align">
                    <h3>Un catalogue riche !</h3>
                    <h4 class="light grey-text text-lighten-3">Des contenus régulièrement mis à jour.</h4>
                    </div>
                </li>
                <li class="pause">
                    <img src="assets/img/albator.jpeg" alt="wallpaper inception">
                    <div class="caption left-align">
                    <h3>Le prix le plus attrayant</h3>
                    <h4 class="light grey-text text-lighten-3">Seulement 4.55€ / mois.</h4>
                    </div>
                </li>
            </ul>
            <div class="prev"><i class="material-icons large">navigate_before</i></div>
            <div class="next"><i class="material-icons large">navigate_next</i></div>
        </div>
</section>

<div id="slider-resp">
    <img id="img-resp" src="assets/img/albator.jpeg" alt="wallpaper arcane">
</div>

<!-- section présentation -->
<section>
    <h2 id="lecinéchezvous">Le cinéma, chez vous..</h2>
    <div id="separator-presentation">
    <img id="img-presentation" data-aos="fade-right" data-aos-duration="1500" src="assets/img/blade-runner.jpeg" alt="img blade runner">
        <div id="text-presentation" data-aos="fade-left" data-aos-duration="1500">
            <h2 id="titre-presentation">MetropolisVOD, le plaisir du cinéma à la maison.</h2>
            <p>MetropolisVOD vous propose un large choix de films, plus incroyables les uns que les autres. Allant de la Science-Fiction aux films un peu gnan-gnan, les heures de visionnages ne seront que plaisir.</p>
            <p>La plateforme vous proposera de vous connecter jusqu'à quatre écran en simultané, le tout en vous proposant des films en 4K et une modélisation sonore sans précédant.</p>
        </div>
    </div>
</section>

<!-- parallax -->

<div class="parallax-container parallax-home">
      <div class="parallax">
          <img src="assets/img/inception.jpg" alt="inception" class="responsive-img">
      </div>
</div>

<!-- services section -->

<section>
    <div id="separator-service">
        <div id="text-service" data-aos="fade-left" data-aos-duration="1000">
            <h2 id="titre-service">Compatibilités</h2>
            <div id="compatibilites">
                <div id="tv">
                    <img class="compa-appareil" src="assets/img/tv.png" alt="tv">
                    <h3 class="compa-name">TV</h3>
                </div>
                <div id="ordi">
                    <img class="compa-appareil" src="assets/img/ordi.png" alt="ordi">
                    <h3 class="compa-name">Ordinateurs</h3>
                </div>
                <div id="mobile">
                    <img class="compa-appareil" src="assets/img/mobile.png" alt="mobile">
                    <h3 class="compa-name">Mobiles</h3>
                </div>
                <div id="console">
                    <img class="compa-appareil" src="assets/img/consoles.png" alt="console">
                    <h3 class="compa-name">Consoles</h3>
                </div>
            </div>
        </div>
        <img id="img-service" data-aos="fade-right" data-aos-duration="1000" src="assets/img/faucon_millenium.png" alt="img dune">
    </div>
</section>

<!-- question fréquente -->

<h2 id="titre-faq">FAQ</h2>
<section id="FAQ">
    <ul class="collapsible">
        <li>
            <div class="collapsible-header">MetropolisVOD, c'est quoi ? 
                <div><div class="first-bar"></div><div class="second-bar"></div></div>
            </div>
            <div class="collapsible-body"><span>MetropolisVOD est une plateforme de streaming VOD qui propose une vaste sélection de films, animés, documentaires.</span></div>
        </li>
        <li>
            <div class="collapsible-header">Combien coûte MetropolisVOD ?
                <div><div class="first-bar"></div><div class="second-bar"></div></div>
            </div>
            <div class="collapsible-body"><span>MetropolisVOD ne propose que pour l'instant un abonnement mensuel de 4,99€/mois, vous permettant de vous connectez à quatre appareils simultanémant, tout en vous proposant la meilleure qualité image et audio.</span></div>
        </li>
        <li>
            <div class="collapsible-header">Quel est le meilleur site de streaming ?
                <div><div class="first-bar"></div><div class="second-bar"></div></div>
            </div>
            <div class="collapsible-body"><span>MetropolisVOD.
            </span></div>
        </li>
        <li>
            <div class="collapsible-header">L'abonnement MetropolisVOD comprend-il une durée d'engagement ?
                <div><div class="first-bar"></div><div class="second-bar"></div></div>
            </div>
            <div class="collapsible-body"><span>MetropolisVOD est sans engagement et vous pouvez annuler votre abonnement quand vous le souhaitez. L'annulation sera effective à la fin de la période pour laquelle vous avez payé.
            </span></div>
        </li>
    </ul>
</section>

<!-- footer -->

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
  <!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $('.parallax').parallax();
            $('.tabs').tabs();
            $('.collapsible').collapsible();

            //function for next slide

            $('.next').click(function(){
                $('.slider').slider('next');
            })

            //function for prev slide

            $('.prev').click(function(){
                $('.slider').slider('prev');
            })

            //function for pause slide

             $('.pause').click(function(){
                $('.slider').slider('pause');
            })

        });
        var options = {
            indicators:true,
            duration:500,
            interval:5000
        };
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.slider');
            var instances = M.Slider.init(elems, options);
        });
    </script>
</body>
</html>