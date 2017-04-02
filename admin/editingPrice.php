<?php

include_once '../core/session.php';
include_once 'isLogged.php';

$id          = (int)$_GET['id'];
$name        = clearString($_POST["name"]);
$price       = (float)clearString($_POST["price"]);
$note        = clearString($_POST["note"]);
$category_id = (int)clearString($_POST["category"]);
$to          = "editPrice.php?id=$id";

if ( !empty($name) && !empty($price) && is_int($category_id) ) {
    if ( Db::update('price_list', [
            'name'        => $name,
            'note'        => $note,
            'price'       => $price,
            'category_id' => $category_id,
            'date'        => date("Y-m-d")
        ], ' WHERE id = ' . $id) == 1
    ) {
        $_SESSION["alerts"][] = [ 'type' => 'success', 'text' => 'Zapis uspešno <strong>urejen</strong> na ceniku!' ];
        $to                   = "cenik.php";
    } else {
        $_SESSION["alerts"][] =
            [ 'type' => 'error', 'text' => 'Urejanje cenika v podatkovni bazi <strong>NEUSPEŠNO</strong>!' ];
    }
} else {
    $_SESSION["alerts"][] = [
        'type' => 'error',
        'text' => 'Polji storitev in cena sta <strong>obvezni</strong>, preverite tudi zapis cene!'
    ];
}

header('Location: ' . $to);