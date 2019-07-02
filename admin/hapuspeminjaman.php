<?php
/**
 * Created by PhpStorm.
 * User: odikk
 * Date: 25/06/2019
 * Time: 22:39
 */

session_start();
require_once ('../config/connect.php');
$id = $_GET['id'];
//echo $id;
$query = "DELETE FROM peminjaman WHERE id_peminjaman=$id";
mysqli_query($conn,$query);

header("Location: index.php");


?>