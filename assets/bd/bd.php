<?php
    require_once 'config.php';

    $film= ('SELECT * FROM film
                
                    INNER JOIN appartient ON film.id_film = appartient.id_film
                    INNER JOIN genre ON genre.id_genre = appartient.id_genre
                ');

                $requeteGenreFilm = $bdd->query($film);
                $dataFilm = $requeteGenreFilm->fetchAll();
?>