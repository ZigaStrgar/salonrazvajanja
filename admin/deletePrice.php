<?php

include_once '../core/session.php';
include_once 'isLogged.php';

$priceList = (int)clearString($_POST["id"]);

if ( !empty($priceList) ) {
    if ( Db::query("DELETE FROM price_list WHERE id = ?", $priceList) == 1 ) {
        $alert = [ 'type' => 'success', 'text' => 'Storitev uspešno <strong>izbrisana</strong> iz cenika!' ];
    } else {
        $alert =
            [ 'type' => 'error', 'text' => 'Brisanje zapisa cenika iz podatkovne baze <strong>NEUSPEŠNO</strong>!' ];
    }
} else {
    $alert = [ 'type' => 'error', 'text' => 'Id storitve je <strong>obvezen</strong>!' ];
}
echo json_encode($alert, true);