<?php
    include "koneksi.php"; //include untuk memasukkan file php ke dalam program

    $nama = $_POST['nama'];  //$_POST memanggil data yang telah diinputkan agar bisa tampil di dalam file
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