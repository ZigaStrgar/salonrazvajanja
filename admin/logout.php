<?php
include_once '../core/session.php';
session_unset();
session_destroy();
header("Location: index.php");