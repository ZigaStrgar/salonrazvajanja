<?php

include_once '../core/session.php';
include_once 'isLogged.php';

$id      = (int)$_GET['id'];
$name    = clearString($_POST["name"]);
$content = fullCheck($_POST["content"]);
$to      = "editService.php?id=$id";

if ( !empty($name) && !empty($content) ) {
    if ( Db::update('services', [ 'name' => $name, 'text' => $content ], ' WHERE id = ' . $id) == 1 ) {
        $_SESSION["alerts"][] = [ 'type' => 'success', 'text' => 'Storitev uspešno <strong>urejena</strong>!' ];
        $to                   = "storitve.php";
    } else {
        $_SESSION["alerts"][] =
            [ 'type' => 'error', 'text' => 'Urejanje storitve v podatkovni bazi <strong>NEUSPEŠNO</strong>!' ];
    }
} else {
    $_SESSION["alerts"][] = [ 'type' => 'error', 'text' => 'Ime storitve in opis sta <strong>obvezna</strong>!' ];
}

header('Location: ' . $to);