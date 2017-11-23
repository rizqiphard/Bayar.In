<?php
    $servername = "localhost";
    $database = "db_bayarin";
    $username = "root";
    $password = "";

    // untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
    // membuat koneksi
    $conn = mysqli_connect($servername, $username, $password, $database);
    // mengecek koneksi

    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }else {
      echo "Sukses";
    }

    // echo "Koneksi berhasil";

    // $sql = 'INSERT INTO tb_profil (nama, email, id, password) VALUES ("mansul", "imm", "snsul", "1234")';
    // $result = mysqli_query($conn,$sql);

    // if ($result) {
    //   echo "Sukses";
    // }

    mysqli_close($conn);
?>
