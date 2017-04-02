<?php
include_once '../core/session.php';

$email    = clearString($_POST["email"]);
$password = clearString($_POST["password"]);

$to = "index.php";
if ( !empty($email) && !empty($password) ) {
    if ( is_email($email) ) {
        if ( !empty($user = Db::queryOne("SELECT email, password FROM users WHERE email = ?", $email)) ) {
            if ( password_verify($password, $user['password']) ) {
                $_SESSION["logged"]  = true;
                $_SESSION["user_id"] = $user['id'];
                $to                  = "main.php";
            } else {
                $_SESSION["alerts"][] = [ 'type' => 'error', 'text' => '<strong>Napačno</strong> geslo!' ];
            }
        } else {
            $_SESSION["alerts"][] =
                [ 'type' => 'error', 'text' => 'Uporabnik s tem e-naslovom <strong>ne obstaja</strong>!' ];
        }
    } else {
        $_SESSION["alerts"][] = [ 'type' => 'error', 'text' => '<strong>Nepravilna</strong> oblika e-naslova!' ];
    }
} else {
    $_SESSION["alerts"][] = [ 'type' => 'error', 'text' => 'E-naslov in geslo sta <strong>obvezna</strong>!' ];
}
header("Location: $to");