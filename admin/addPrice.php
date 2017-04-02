<?php

include_once '../core/session.php';
include_once 'isLogged.php';

$name        = clearString($_POST["name"]);
$price       = (float)clearString($_POST["price"]);
$note        = clearString($_POST["note"]);
$category_id = (int)clearString($_POST["category"]);

if ( !empty($name) && !empty($price) && is_int($category_id) ) {
    if ( Db::insert('price_list', [
            'name'        => $name,
            'note'        => $note,
            'price'       => $price,
            'category_id' => $category_id,
            'date'        => date("Y-m-d")
        ]) == 1
    ) {
        $_SESSION["alerts"][] = [ 'type' => 'success', 'text' => 'Zapis uspešno <strong>dodan</strong> na cenik!' ];
    } else {
        $_SESSION["alerts"][] =
            [ 'type' => 'error', 'text' => 'Dodajanje cenika v podatkovno bazo <strong>NEUSPEŠNO</strong>!' ];
    }
} else {
    $_SESSION["alerts"][] = [ 'type' => 'error', 'text' => 'Polji storitev in cena sta <strong>obvezni</strong>, preverite tudi zapis cene!' ];
}

header('Location: cenik.php');