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
<body id="sign-background">
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

    <section id="sign-section">
        <?php
            if(isset($_GET['reg_err']))
            {
                $err = htmlspecialchars($_GET['reg_err']);

                switch($err)
                {
                    case 'password':
                        ?>
                        <div class="erreur-log" data-aos="zoom-in-up">
                            <p>Erreur mot de passe différent</p>
                        </div>
                    <?php
                    break;
                    case 'email':
                        ?>
                        <div class="erreur-log" data-aos="zoom-in-up">
                            <p>Erreur email non valide</p>
                        </div>
                    <?php
                    break;
                    case 'email_length':
                        ?>
                        <div class="erreur-log" data-aos="zoom-in-up">
                            <p>Erreur email trop long</p>
                        </div>
                    <?php
                    break;
                    case 'pseudo_length':
                        ?>
                        <div class="erreur-log" data-aos="zoom-in-up">
                            <p>Erreur pseudo trop long</p>
                        </div>
                    <?php
                    break;
                    case 'already':
                        ?>
                        <div class="erreur-log" data-aos="zoom-in-up">
                            <p>Erreur compte déjà existant</p>
                        </div>
                    <?php
                }
            }
        ?>
        <div id="sign-box">
            <h2>Inscription</h2>
            <form action="assets/bd/inscription_traitement.php" method="post" id="sign-form">
                <input type="text" id="email" name="pseudo" placeholder="Pseudo" maxlength="100" required>
                <input type="email" id="email" name="email" placeholder="Email" maxlength="100" required>
                <input type="password" id="password" name="password" placeholder="Mot de passe" maxlength="100" required>
                <input type="password" id="password" name="password_retype" placeholder="Validez le mot de passe" maxlength="100" required>
                <input type="submit" id="submit-log" name="connexion" value="S'inscrire">
                <p>Vous avez déjà un compte ? <a href="login.php">Se connecter</a></p>
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