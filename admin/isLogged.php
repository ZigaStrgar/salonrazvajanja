<?php
if(!$_SESSION['logged']){
    header('Location: index.php');
    exit();
}
