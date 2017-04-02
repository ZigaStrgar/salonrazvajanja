<?php

include_once '../core/session.php';
include_once 'isLogged.php';

$service = (int)clearString($_POST["id"]);

if ( !empty($service) ) {
    if ( Db::query("DELETE FROM services WHERE id = ?", $service) == 1 ) {
        $alert = [ 'type' => 'success', 'text' => 'Storitev uspešno <strong>izbrisana</strong>!' ];
    } else {
        $alert = [ 'type' => 'error', 'text' => 'Brisanje storitve iz podatkovne baze <strong>NEUSPEŠNO</strong>!' ];
    }
} else {
    $alert = [ 'type' => 'error', 'text' => 'Id storitve je <strong>obvezen</strong>!' ];
}
echo json_encode($alert, true);