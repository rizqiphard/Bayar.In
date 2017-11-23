<?php
$servername = "localhost";
$database = "db_bayarin";
$username = "root";
$password = "";
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

if(isset($_POST['redeemCode'])){
    $kode = $_POST['kodeVoucher'];
    $id = $_POST['id'];
    $nominalVoucher;
    $nominalData;

    $sql = "SELECT nominal FROM tb_voucher WHERE kode = '$kode'";
    $result = mysqli_query($conn, $sql);
    // $target = 'redeemstatus.php';
    while ($hasil = mysqli_fetch_array($result)) {
          $nominalVoucher = $hasil['nominal'];
    }
    echo $nominalVoucher;

    $sql = "SELECT saldo FROM tb_profil WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    while ($hasil = mysqli_fetch_array($result)) {
          $nominalData = $hasil['saldo'];
    }
    echo $nominalData;

    $nominalTotal = $nominalVoucher + $nominalData;
    $sqlUpdate = " UPDATE `tb_profil` SET `saldo`= '$nominalTotal' WHERE id = '$id'";
    $resultUpdate = mysqli_query($conn, $sqlUpdate);


  }else {
    echo "Gagal";
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
			<div>Redeem<span>Code </span></div>
		</div>
    <div class="header left" >
     <br><br><br><a href="/bayarin">
                     <img style="width:175px" src="/bayarin/images/logo.png" style="float:left"/>
                    </a>
    </div>
		<br>
		<div class="transfer">
        	<form action="redeemcode.php" method="post">
				<input type="text" placeholder="ID" name="id"><br>
        <input type="text" placeholder="Kode" name="kodeVoucher"><br>
				<input name = "redeemCode" type="submit" value="Redeem Code"><br>
        <!-- <input type="text" placeholder="status" name="Status"><br> -->
          </form>
		</div>
    </body>
</html>
