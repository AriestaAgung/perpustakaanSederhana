<?php
/**
 * Created by PhpStorm.
 * User: odikk
 * Date: 26/06/2019
 * Time: 1:40
 */

session_start();
require_once ('../config/connect.php');

$id = $_GET['id'];

$buku = $_POST['namabuku'];
$namapeminjam = $_POST['namapeminjam'];
$tanggalpinjam = $_POST['tanggalpinjam'];
$tanggalkembali = $_POST['tanggalkembali'];



$query = "UPDATE peminjaman SET nama_buku = '$buku',  nama_peminjam = '$namapeminjam', tanggal_pinjam = '$tanggalpinjam',tanggal_kembali = '$tanggalkembali' WHERE id_peminjaman=$id";
//echo $query;
mysqli_query($conn, $query);
header("Location: index.php");

?>