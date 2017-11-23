<?php
// include 'connection.php';
//memulai session
// session_start();
//cek adanya session, jika session sudah ada maka diarahkan ke index.php

?>

<html>
    <head>
    <link href="SignUp.css" rel="stylesheet" type="text/css"/>
    </head>
<body>

	<table width="50td_persen" border="0" align="center">
			<tr>
				<tr>
					<td colspan="3" bgcolor="#0099FF"><h3><font face="Times New Roman, Times, serif"><p align="center">SIGN UP</p></font></h3></td>
				</tr>
				<td width="35td_persen">
					<form method="post" action="tangkap.php">
					<table border="0" width="100td_persen" bgcolor="#FFFFFF">
						<tr>
							<td><P align="right">Nama</P></td>
							<td width="10">:</td>
							<td><input type="text" name="nama"></td>
						</tr>

						<tr>
							<td><P align="right">Email</P></td>
							<td width="10">:</td>
							<td><input type="text" name="email"></td>
						</tr>

						<tr>
							<td><P align="right">ID</P></td>
							<td width="10">:</td>
							<td><input type="text" name="id"></td>
						</tr>

						<tr>
							<td><P align="right">Password</P></td>
							<td width="10">:</td>
							<td><input type="text" name="password"></td>
						</tr>

            <tr>
							<td><P align="right">No. HP</P></td>
							<td width="10">:</td>
							<td><input type="text" name="nohp"></td>
						</tr>

						<tr>
							<td></td>
							<td></td>
							<td><input type="submit" name="signup" value="SIGN UP"></td>
						</tr>
						<tr>
							<td colspan="3" bgcolor="#0099FF"><h3><font face="Times New Roman, Times, serif"><p align="center">BAYAR.IN</p></font></h3></td>
						</tr>
					</table>
					</form>
		</table>

</body>
</html>
