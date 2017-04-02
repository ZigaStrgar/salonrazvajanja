<?php

include_once '../core/session.php';
include_once 'isLogged.php';

$category = clearString($_POST["name"]);

if ( !empty($category) ) {
    if ( Db::insert('categories', [ 'name' => $category ]) == 1 ) {
        $_SESSION["alerts"][] = [ 'type' => 'success', 'text' => 'Kategorija uspešno <strong>dodana</strong>!' ];
    } else {
        $_SESSION["alerts"][] =
            [ 'type' => 'error', 'text' => 'Dodajanje kategorije v podatkovno bazo <strong>NEUSPEŠNO</strong>!' ];
    }
} else {
    $_SESSION["alerts"][] = [ 'type' => 'error', 'text' => 'Ime kategorije je <strong>obvezno</strong>!' ];
}

header('Location: cenik.php');