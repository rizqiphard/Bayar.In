<?php
$servername = "localhost";
$database = "db_bayarin";
$username = "root";
$password = "";
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

?>
<?php
if(isset($_POST['redeemCode'])){
    $kode = $_POST['kodeVoucher'];
    $status;
    $nominal;

    $sql = "SELECT nominal FROM tb_voucher WHERE kode = '$kode'";
    $result = mysqli_query($conn, $sql);
    while ($hasil = mysqli_fetch_array($result)) {
          $nominal = $hasil['nominal'];
          if ($nominal != 0)
            # code...
            $status = "Sukses";

          else {
            $status =  "Gagal";
          }

    }
    echo $nominal;

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
    <div class="header left" >
     <br><br><br><br><br><br><br>
                     <div>Redeem<span>Sukses </span></div>
    </div>
    <div class="header left" >
     <br><br><br><br><br><br><br><br><br>
                     <div>Redeem<span>Nominal : '$nominal' </span></div>

    </div>
    <br>
		<div class="transfer">
        	<form action="redeemcode.php" method="post">
				<input type="text" placeholder="Kode" name="kodeVoucher"><br>
				<input name = "redeemCode" type="submit" value="Redeem Code"><br>
        <input type="text" placeholder="status" name="Status"><br>
           </form>
		</div>
    </body>
</html>



<!-- <html>
    <head>
    <link href="transfer.css" rel="stylesheet" type="text/css"/>
    <script src="transfer.js"></script>
    </head>
    <body>
        <div class="body"></div>
		<div class="grad"></div>
		<div class="header left">
			<div>Transfer<span>Uang</span></div>
		</div>
		<br>
		<div class="transfer">
        	<form method="post">
				<input type="text" placeholder="ID Penerima" name="idpenerima"><br>
				<input type="text" placeholder="Nominal" name="nominal"><br>
        <input type="text" placeholder="Catatan" name="catatan"><br>
				<input name = "kirim" type="button" value="Kirim">
                </form>
		</div>
    </body>
</html> -->
