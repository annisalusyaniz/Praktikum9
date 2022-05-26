<?php
include 'koneksi.inc.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$login= mysqli_query($conn,"SELECT * FROM user_login WHERE username='$username' AND pw='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){
$_SESSION['username'] = $username;
header("location:cetak.php");
}else{
header("location:index12.php");
}
?>