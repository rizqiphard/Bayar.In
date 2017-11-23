<?php

$servername = "localhost";
$database = "bayar.in";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
echo "Halo";
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}else {
  echo "koneksi sukses";
}

  if(isset($_POST['signup'])) {
      $nama = $_POST["nama"];
      $email = $_POST["email"];
      $nohp = $_POST["nohp"];
      $id = $_POST["id"];
      $pw = $_POST["password"];
      $pesan = "Halo, Selamat Sore :) $nama Apa Kabar ?";
       echo "Halo, Selamat Sore :) <br>";
       echo "Nama   : $nama <br>";
       echo "Email  : $email <br>";
       echo "No. HP : $nohp <br>";


       try {
         $sql = "INSERT INTO tb_profil (nama, email, id, password, nohp) VALUES ('$nama', '$email', '$id', '$pw','$nohp')";
         $result = mysqli_query($conn,$sql);

       } catch (Exception $e) {
         echo $e;
         echo "Gagal";
       }

       if ($result) {
         echo "Sukses";
       }else {
         echo "Gagal";
       }

        // $curl = curl_init();
        //
        // curl_setopt_array($curl, array(
        //   CURLOPT_URL => "https://api.mainapi.net/smsnotification/1.0.0/messages",
        //   CURLOPT_RETURNTRANSFER => true,
        //   CURLOPT_ENCODING => "",
        //   CURLOPT_MAXREDIRS => 10,
        //   CURLOPT_TIMEOUT => 30,
        //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //   CURLOPT_CUSTOMREQUEST => "POST",
        //   CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"msisdn\"\r\n\r\n'$nohp'\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"content\"\r\n\r\n$pesan\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
        //   CURLOPT_HTTPHEADER => array(
        //     "accept: application/json",
        //     "authorization: Bearer 950896abfd03d4e9d340e47905152bba",
        //     "cache-control: no-cache",
        //     "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
        //     "postman-token: 1a98f0ee-a14c-b9dd-6070-5d89c98845b5"
        //   ),
        // ));
        //
        // $response = curl_exec($curl);
        // $err = curl_error($curl);
        //
        // curl_close($curl);
        //
        // if ($err) {
        //   echo "cURL Error #:" . $err;
        // } else {
        //   // echo $response;
        //   echo "<br> <br> Please Check Your Phone";
        // }
}





 ?>
