<?php

session_start();
include 'connection.php';

//menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

//menyeleksi data pada tabel admin dg password dan username yag sesuai

$data = mysqli_query($conn, "select * from user where username = '$username' and password = '$password'"); 

//mengjitung jumlah data yang masuk
$cek = mysqli_num_rows($data);

if ($cek > 0) {
  $_SESSION['username'] = $username;
  $_SESSION['status'] = "login";
  header("location:kelolaKec.php");
} 
else
{
    header("location:index.php?pesan=gagal");

}
  

?>