<?php
$servername = "localhost";
$database = "db_bayarin";
$username = "root";
$password = "";
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

if(isset($_POST['buatVoucher'])){
    $id = $_POST['id'];
    $kode = $_POST['kodeVoucher'];
    $nominal = $_POST['nominalVoucher'];
    $noHpPenerima = "081226269692";
    // $pesan = " Halo $id, Anda berhasil membuat voucher dengan nominal $nominal dengan kode $kode, Harap digunakan dengan sebaik baiknya";
    echo $kode;
    echo $nominal;
    $saldoUser = 0;

    $sql = "SELECT saldo FROM tb_profil WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    // $target = 'redeemstatus.php';
    while ($hasil = mysqli_fetch_array($result)) {
          $saldoUser = $hasil['saldo'];
    }

    $saldoAkhir = $saldoUser - $nominal;

    $sqlUpdate = " UPDATE `tb_profil` SET `saldo`= '$saldoAkhir' WHERE id = '$id'";
    $resultUpdate = mysqli_query($conn, $sqlUpdate);
    $pesan = "Saldo Akhir $saldoAkhir ,  Saldo User $saldoUser, Nominal $nominal";




    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.mainapi.net/smsnotification/1.0.0/messages",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"msisdn\"\r\n\r\n$noHpPenerima\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"content\"\r\n\r\n$pesan\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
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
    echo $response;
    }



    $sql = "INSERT INTO tb_voucher (kode,nominal) VALUES ('$kode', '$nominal')";
    $result = mysqli_query($conn,$sql);

    if ($result) {
      echo "sukses";
    }else {
      echo "GagalGaraGaraDatabase";
    }

}else {
  echo "GagalGaraGaraButton";
}

 ?>


<html>
    <head>
    <link href="buatVoucher.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="body"></div>
		<div class="grad"></div>
		<div class="header left">
			<div>Buat<span>Voucher</span></div>
		</div>
    <div class="header left" >
     <br><br><br><a href="/bayarin">
                     <img style="width:175px" src="/bayarin/images/logo.png" style="float:left"/>
                    </a>
    </div>
		<br>
		<div class="transfer">
        	<form action="buatVoucher.php" method="post">
        <input type="text" placeholder="ID" name="id"><br>
				<input type="text" placeholder="Kode" name="kodeVoucher"><br>
				<input type="text" placeholder="Nominal" name="nominalVoucher"><br>
				<input name = "buatVoucher" type="submit" value="Generate Code">
           </form>
		</div>
    </body>
</html>
