<?php

include_once '../core/session.php';
include_once 'isLogged.php';

$id      = (int)$_GET['id'];
$name    = clearString($_POST["title"]);
$content = fullCheck($_POST["content"]);

$to = "editNews.php?id=$id";

if ( !empty($name) && !empty($content) ) {
    if ( Db::update('news', [ 'title' => $name, 'text' => $content ], ' WHERE id = ' . $id) == 1 ) {
        $_SESSION["alerts"][] = [ 'type' => 'success', 'text' => 'Novica uspešno <strong>urejena</strong>!' ];
        $to                   = "novice.php";
    } else {
        $_SESSION["alerts"][] =
            [ 'type' => 'error', 'text' => 'Urejanje novice v podatkovni bazi <strong>NEUSPEŠNO</strong>!' ];
    }
} else {
    $_SESSION["alerts"][] = [ 'type' => 'error', 'text' => 'Naslov in vsebina sta <strong>obvezna</strong>!' ];
}

header('Location: ' . $to);