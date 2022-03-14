<?php
    session_start();
    require_once 'config.php';

    $requete=$bdd->query('SELECT * FROM film');
    while($row = $requete->fetch(PDO::FETCH_ASSOC)){
        echo "<div class='film' id='film'>" . $row['titre_film'] ."</div>";
    }

    function DureeFilm($NMin) {
        $division = ($NMin / 60);
        $heures  = (($NMin / 60) % 60);
        $reste = $division - (($NMin / 60) % 60);
        $minutes = $reste * 60;
        return $heures  .  "h"  .  $minutes  .  "min";
    }

    echo Chrono(2080);;