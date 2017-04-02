<?php

include_once '../core/session.php';
include_once 'isLogged.php';

$id       = (int)clearString($_GET["id"]);
$category = clearString($_POST["name"]);
$to       = "editCategory.php?id=$id";

if ( !empty($category) ) {
    if ( Db::update('categories', [ 'name' => $category ], ' WHERE id = ' . $id) == 1 ) {
        $_SESSION["alerts"][] = [ 'type' => 'success', 'text' => 'Kategorija uspešno <strong>urejena</strong>!' ];
        $to                   = "cenik.php";
    } else {
        $_SESSION["alerts"][] =
            [ 'type' => 'error', 'text' => 'Urejanje kategorije v podatkovni bazi <strong>NEUSPEŠNO</strong>!' ];
    }
} else {
    $_SESSION["alerts"][] = [ 'type' => 'error', 'text' => 'Ime kategorije je <strong>obvezno</strong>!' ];
}

header('Location: ' . $to);