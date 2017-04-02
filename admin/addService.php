<?php

include_once '../core/session.php';
include_once 'isLogged.php';

$name    = clearString($_POST["name"]);
$content = fullCheck($_POST["content"]);

if ( !empty($name) && !empty($content) ) {
    if ( Db::insert('services', [ 'name' => $name, 'text' => $content ]) == 1 ) {
        $_SESSION["alerts"][] = [ 'type' => 'success', 'text' => 'Storitev uspešno <strong>dodana</strong>!' ];
    } else {
        $_SESSION["alerts"][] =
            [ 'type' => 'error', 'text' => 'Dodajanje storitve v podatkovno bazo <strong>NEUSPEŠNO</strong>!' ];
    }
} else {
    $_SESSION["alerts"][] = [ 'type' => 'error', 'text' => 'Ime storitve in opis sta <strong>obvezna</strong>!' ];
}

header('Location: storitve.php');