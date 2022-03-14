<?php
    session_start();
    require_once 'config.php';

    if(isset($_POST['email']) && isset($_POST['password']))
    {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $check = $bdd->prepare('SELECT nom_user, email_user, password_user FROM users WHERE email_user = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $password = hash('sha256', $password);

                if($data['password_user'] === $password)
                {
                    $_SESSION['user'] = $data['nom_user'];
                    header('Location:../../home.php');
                }else header('Location:../../login.php?login_err=password');

            }else header('Location:../../login.php?login_err=email');
            
        }else header('Location:../../login.php?login_err=already');

    }else header('Location:../../login.php');

?>