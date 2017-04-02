<?php

include_once '../core/session.php';
include_once 'isLogged.php';

$category = (int)clearString($_POST["id"]);

if ( !empty($category) ) {
    if ( Db::query("DELETE FROM price_list WHERE category_id = ?", $category) == 1 && Db::query("DELETE FROM categories WHERE id = ?", $category) == 1 ) {
        $alert = [ 'type' => 'success', 'text' => 'Kategorija uspešno <strong>izbrisana</strong>!' ];
    } else {
        $alert = [ 'type' => 'error', 'text' => 'Brisanje kategorije iz podatkovne baze <strong>NEUSPEŠNO</strong>!' ];
    }
} else {
    $alert = [ 'type' => 'error', 'text' => 'Id kategorije je <strong>obvezen</strong>!' ];
}
echo json_encode($alert, true);