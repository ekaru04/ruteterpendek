<?php
    include ('connection.php');


    $namaKec = $_POST['nama_kecamatan'];

    mysqli_query($conn, "INSERT into kecamatan VALUES ('', '$namaKec')");

    header("location:kelolaKec.php");
?>