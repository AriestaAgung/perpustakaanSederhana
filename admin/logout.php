<?php
/**
 * Created by PhpStorm.
 * User: odikk
 * Date: 25/06/2019
 * Time: 22:32
 */
session_start();
//    unset($_SESSION['nama']);
    $_SESSION['status'] = "logout";
    session_unset();
    session_destroy();

    header("Location: ../index.php");
?>