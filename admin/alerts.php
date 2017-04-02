<?php
if ( isset($_SESSION['alerts']) ) {
    foreach ( $_SESSION['alerts'] as $alert ) {
        include 'partials/alert.php';
    }
    unset($_SESSION['alerts']);
}
