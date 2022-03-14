<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/m-icon.png">
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
<body id="login-background">
    <!-- navbar -->
    <header>
        <nav>
            <div class="nav-wrapper">
                <div id="navbar">
                    <a href="index.php" class="brand-logo"><img data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500" id="logo-navbar" src="assets/img/logo.png" alt="Logo Metropolis"></a>
                </div>
            </div>
        </nav>
    </header>

    <section id="log-section">
        <?php
            if(isset($_GET['login_err']))
            {
                $err = htmlspecialchars($_GET['login_err']);

                switch($err)
                {
                    case 'password':
                        ?>
                        <div class="erreur-log" data-aos="zoom-in-up">
                            <p>Erreur : mot de passe incorrect</p>
                        </div>
                    <?php
                    break;
                    case 'email':
                        ?>
                        <div class="erreur-log" data-aos="zoom-in-up">
                            <p>Erreur : email incorrect</p>
                        </div>
                    <?php
                    break;
                    case 'already':
                        ?>
                        <div class="erreur-log" data-aos="zoom-in-up">
                            <p>Erreur : compte non existant</p>
                        </div>
                    <?php
                    break;
                    case 'success':
                        ?>
                        <div class="success_sign" data-aos="zoom-in-up">
                            Succès inscription réussie !
                        </div>
                    <?php
                }
            }
        ?>
        <div id="log-box">
            <h2>S'identifier</h2>
            <form action="assets/bd/connexion.php" method="post" id="log-form">
                <input type="email" id="email" name="email" placeholder="Email" maxlength="100" required>
                <input type="password" id="password" name="password" placeholder="Mot de passe" maxlength="100" required>
                <input type=submit id="submit-log" name="connexion" value="S'identifier">
                <label><input type="checkbox"/><span id="checkbox-souvenir">Se souvenir de moi</span></label>
                <p>Première visite sur MetropolisVOD ? <a href="signup.php">Inscrivez-vous</a></p>
            </form>
        </div>
    </section>

    <!-- footer -->

<footer id="footer-log">
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
</body>
</html>