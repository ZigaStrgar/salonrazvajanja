<?php

include_once '../core/session.php';
include_once 'isLogged.php';

$name    = clearString($_POST["title"]);
$content = fullCheck($_POST["content"]);

if ( !empty($name) && !empty($content) ) {
    if ( Db::insert('news', [ 'title' => $name, 'text' => $content ]) == 1 ) {
        $_SESSION["alerts"][] = [ 'type' => 'success', 'text' => 'Novica uspešno <strong>dodana</strong>!' ];
    } else {
        $_SESSION["alerts"][] =
            [ 'type' => 'error', 'text' => 'Dodajanje novice v podatkovno bazo <strong>NEUSPEŠNO</strong>!' ];
    }
} else {
    $_SESSION["alerts"][] = [ 'type' => 'error', 'text' => 'Naslov in vsebina sta <strong>obvezna</strong>!' ];
}

header('Location: novice.php');