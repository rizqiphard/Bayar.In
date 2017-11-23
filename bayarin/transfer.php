<?php
    
 ?>


<html>
    <head>
    <link href="transfer.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="body"></div>
		<div class="grad"></div>
		<div class="header left">
			<div>Transfer<span>Uang</span></div>
		</div>
    <div class="header left" >
     <br><br><br><a href="/bayarin">
                     <img style="width:175px" src="/bayarin/images/logo.png" style="float:left"/>
                    </a>
    </div>
		<br>
		<div class="transfer">
        	<form action="kirim.php" method="post">
				<input type="text" placeholder="ID Pengirim" name="idpengirim"><br>
				<input type="text" placeholder="ID Penerima" name="idpenerima"><br>
        <input type="text" placeholder="No. HP Penerima" name="noHpPenerima"><br>
				<input type="text" placeholder="Nominal" name="nominal"><br>
        <input type="text" placeholder="Catatan" name="catatan"><br>
				<input name="kirim" type="submit" value="Kirim">
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
