<?php

    function DureeFilm($NMin) {
        $division = ($NMin / 60);
        $heures  = (($NMin / 60) % 60);
        $reste = $division - (($NMin / 60) % 60);
        $minutes = $reste * 60;
        return $heures  .  "h"  .  $minutes  .  "min";
    }

?>