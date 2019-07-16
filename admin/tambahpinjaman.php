<?php
/**
 * Created by PhpStorm.
 * User: odikk
 * Date: 26/06/2019
 * Time: 1:13
 */

session_start();
require_once ('../config/connect.php');

$buku = $_POST['namabuku'];
$namapeminjam = $_POST['namapeminjam'];
$tanggalpinjam = $_POST['tanggalpinjam'];
$tanggalkembali = $_POST['tanggalkembali'];

$query = "INSERT INTO peminjaman(nama_buku, nama_peminjam, tanggal_pinjam, tanggal_kembali) values('$buku','$namapeminjam','$tanggalpinjam','$tanggalkembali')";
mysqli_query($conn, $query);
header("Location: index.php");

