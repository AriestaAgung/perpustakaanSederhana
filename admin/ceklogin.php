<?php
/**
 * Created by PhpStorm.
 * User: odikk
 * Date: 25/06/2019
 * Time: 21:54
 */
require_once ('../config/connect.php');

$user = $_POST['user'];
$pass = $_POST['password'];
$query = "select * from users where username = '$user' AND password = '$pass'";
$data = mysqli_query($conn, $query);
$cek = mysqli_num_rows($data);
$row = mysqli_fetch_assoc($data);

//echo $cek;
if ($cek > 0 ) {
    session_start();
    $_SESSION['nama'] = $row['nama'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['status'] = "login";
    header("Location: index.php");

} else if ($cek == 0) {
    header("Location: ../login.php");
}
?>