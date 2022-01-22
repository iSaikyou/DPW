<?php
    include "koneksi.php"; //include digunakan untuk menyertakan file php ke dalam program

    $nama = $_POST['nama'];  //$_POST berfungsi untuk memanggil data yang telah diinputkan agar bisa ditampilkan di file
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT into data(nama, kelas, alamat) VALUES ('$nama', '$kelas', '$alamat')";
    $add = $conn->query($sql); 

    if($add) { 
        $conn->close();
        header("location:index.php");
        exit();
    } else {
        echo "Error : ".$conn->error;
        $conn->close();
        exit();
    }
?>