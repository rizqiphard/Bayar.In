<?php

    $servername = "localhost";
    $database = "db_bayarin";
    $username = "root";
    $password = "";
    // untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
    // membuat koneksi
    $conn = mysqli_connect($servername, $username, $password, $database);

    if(isset($_POST['topup'])){
    $id = $_POST['id'];
    $nominalTambahan = $_POST['nominal'];
    $nominal;

    $sql = "SELECT saldo FROM tb_profil WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    while ($hasil = mysqli_fetch_array($result)) {
          $nominal = $hasil['saldo'];
        }

    } else {
      echo "Gagal";
    }
    $nominalTotal = $nominal + $nominalTambahan;
    echo "<br><br><br>";
    echo $nominalTotal;
    echo "<br>";
    echo $id;

    $sqlUpdate = " UPDATE `tb_profil` SET `saldo`= '$nominalTotal' WHERE id = '$id'";
    $resultUpdate = mysqli_query($conn, $sqlUpdate);


    $pesan = " Selamat $id Anda Berhasil Melakukan TopUp sejumlah $nominalTambahan , Total saldo anda $nominalTotal";
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.mainapi.net/smsnotification/1.0.0/messages",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"msisdn\"\r\n\r\n081226269692\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"content\"\r\n\r\n$pesan\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
      CURLOPT_HTTPHEADER => array(
        "accept: application/json",
        "authorization: Bearer 950896abfd03d4e9d340e47905152bba",
        "cache-control: no-cache",
        "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
        "postman-token: 1a98f0ee-a14c-b9dd-6070-5d89c98845b5"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      // echo $response;
      echo "<br> <br> Please Check Your Phone";
    }

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Isi Saldo</title>

    <link rel="stylesheet" href="saldo.css" type="text/css" />
    <div class="header left" >
     <br><br><br><a href="/bayarin">
                     <img style="width:175px" src="/bayarin/images/logo.png" style="float:left"/>
                    </a>
    </div>


  </head>

  <body>

   <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Isi<span>Saldo </span></div>
		</div>
		<br>
		<div class="login">
      <form  action="saldo.php" method="post">
        <input type="text" placeholder="ID" name="id">
				<input type="text" placeholder="nominal" name="nominal"><br>
				<input type="submit" name="topup" value="Top Up">
      </form>
		</div>

  </body>
</html>
