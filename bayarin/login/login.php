<?php

$servername = "localhost";
$database = "db_bayarin";
$username = "root";
$password = "";
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// if (!$conn) {
//     die("Koneksi gagal: " . mysqli_connect_error());
// }else {
//   echo "koneksi sukses";
// }

if(isset($_POST["login"])){
  // echo "Halo";
  $id = $_POST["user_name"];
  $pw = $_POST["user_pass"];
  $pwdata = "Halo";

  // echo "<br>";
  // echo $id;
  // echo "<br>";
  // echo $pw;


  $sql = "SELECT password FROM tb_profil WHERE id = '$id'";
  $result = mysqli_query($conn, $sql);
  while ($hasil = mysqli_fetch_array($result)) {
        $pwdata = $hasil['password'];
  }

  if ($pw == $pwdata) {
    echo " <br> <a href='localhost/bayarin/index.html'>Sukses Login</a> <br> ";

  }else {
    echo "Gagal";
  }

}else {
  echo " <br> Belum berhasil di klik";
}

 ?>
