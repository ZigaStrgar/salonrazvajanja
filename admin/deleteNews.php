<?php

include_once '../core/session.php';
include_once 'isLogged.php';

$news = (int)clearString($_POST["id"]);

if ( !empty($news) ) {
    if ( Db::query("DELETE FROM news WHERE id = ?", $news) == 1 ) {
        $alert = [ 'type' => 'success', 'text' => 'Novica uspešno <strong>izbrisana</strong>!' ];
    } else {
        $alert = [ 'type' => 'error', 'text' => 'Brisanje novice iz podatkovne baze <strong>NEUSPEŠNO</strong>!' ];
    }
} else {
    $alert = [ 'type' => 'error', 'text' => 'Id novice je <strong>obvezen</strong>!' ];
}
echo json_encode($alert, true);