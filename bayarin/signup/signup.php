<?php

$servername = "localhost";
$database = "db_bayarin";
$username = "root";
$password = "";
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}else {
  echo "koneksi sukses";
}

  if(isset($_POST["submitkan"])){
    // echo "Halo";
    $email = $_POST["user_email"];
    $id = $_POST["user_name"];
    $pw = $_POST["user_pass"];
    $notelp = $_POST["user_notelp"];
    // echo "Halo, Selamat Sore :) <br>";
    // echo "Email  : $email <br>";

    $sql = "INSERT INTO tb_profil (email, id, password,nohp) VALUES ('$email', '$id', '$pw','$notelp')";
    $result = mysqli_query($conn,$sql);

    if ($result) {
      echo "Sukses";
    }else {
      echo "Gagal";
    }

    $pesan = " Selamat Anda Telah Terdaftar di BAYAR.IN dengan username : $id , email : $email dan password : $pw , Harap berhati hati dalam menjaga password anda. 
      Best Regard, Jayaraga Team ";


              $curl = curl_init();

              curl_setopt_array($curl, array(
              CURLOPT_URL => "https://api.mainapi.net/smsnotification/1.0.0/messages",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "POST",
              CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"msisdn\"\r\n\r\n$notelp\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"content\"\r\n\r\n Halo $id, $pesan\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
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

  }else {
    echo " <br> Belum berhasil di klik";
  }

?>

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign Up & Login Form</title>

      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
        @import url(https://fonts.googleapis.com/css?family=Raleway:400,100,200,300);
* {
  margin: 0;
  padding: 0; }

a {
  color: #666;
  text-decoration: none; }
  a:hover {
    color: #4FDA8C; }

input {
  font: 16px/26px "Raleway", sans-serif; }

body {
  color: #666;
  background-image : url("backlogin2.jpg");
  background-color: #f1f2f2;
  font: 16px/26px "Raleway", sans-serif; }

.form-wrap {
  background-color: #fff;
  width: 320px;
  margin: 3em auto;
  box-shadow: 0px 1px 8px #BEBEBE;
  -webkit-box-shadow: 0px 1px 8px #BEBEBE;
  -moz-box-shadow: 0px 1px 8px #BEBEBE; }
  .form-wrap .tabs {
    overflow: hidden; }
    .form-wrap .tabs h3 {
      float: left;
      width: 50%; }
      .form-wrap .tabs h3 a {
        padding: 0.5em 0;
        text-align: center;
        font-weight: 400;
        background-color: #e6e7e8;
        display: block;
        color: #666; }
        .form-wrap .tabs h3 a.active {
          background-color: #fff; }
  .form-wrap .tabs-content {
    padding: 1.5em; }
    .form-wrap .tabs-content div[id$="tab-content"] {
      display: none; }
    .form-wrap .tabs-content .active {
      display: block !important; }
  .form-wrap form .input {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    color: inherit;
    font-family: inherit;
    padding: .8em 0 10px .8em;
    border: 1px solid #CFCFCF;
    outline: 0;
    display: inline-block;
    margin: 0 0 .8em 0;
    padding-right: 2em;
    width: 100%; }
  .form-wrap form .button {
    width: 100%;
    padding: .8em 0 10px .8em;
    background-color: #28A55F;
    border: none;
    color: #fff;
    cursor: pointer;
    text-transform: uppercase; }
    .form-wrap form .button:hover {
      background-color: #4FDA8C; }
  .form-wrap form .checkbox {
    visibility: hidden;
    padding: 20px;
    margin: .5em 0 1.5em; }
    .form-wrap form .checkbox:checked + label:after {
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
      filter: alpha(opacity=100);
      opacity: 1; }
  .form-wrap form label[for] {
    position: relative;
    padding-left: 20px;
    cursor: pointer; }
    .form-wrap form label[for]:before {
      content: '';
      position: absolute;
      border: 1px solid #CFCFCF;
      width: 17px;
      height: 17px;
      top: 0px;
      left: -14px; }
    .form-wrap form label[for]:after {
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
      filter: alpha(opacity=0);
      opacity: 0;
      content: '';
      position: absolute;
      width: 9px;
      height: 5px;
      background-color: transparent;
      top: 4px;
      left: -10px;
      border: 3px solid #28A55F;
      border-top: none;
      border-right: none;
      -webkit-transform: rotate(-45deg);
      -moz-transform: rotate(-45deg);
      -o-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
      transform: rotate(-45deg); }
  .form-wrap .help-text {
    margin-top: .6em; }
    .form-wrap .help-text p {
      text-align: center;
      font-size: 14px; }

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
<header role="banner" id="fh5co-header">
		<div class="fluid-container">
<nav class="navbar navbar-default">
				<div class="navbar-header">
					<a class="navbar-brand" href="/bayarin"><span></span>
                    	<img style="width:175px" src=""/>
                    </a>
				</div>
                <div class="navbar-header">
					<a class="navbar-brand" href="/bayarin"><span></span>
                    	<img style="width:175px" src="/bayarin/images/logo.png"/>
                    </a>
				</div>


			</nav>
            </div>
</header>
  <div class="form-wrap">
		<div class="tabs">
			<h3 class="signup-tab"><a class="active" href="#signup-tab-content">Sign Up</a></h3>
			<h3 class="login-tab"><a href="#login-tab-content">Login</a></h3>
		</div><!--.tabs-->

		<div class="tabs-content">
			<div id="signup-tab-content" class="active" >
				<form class="signup-form" action="signup.php" method="post">
					<input type="email" class="input" name="user_email" autocomplete="off" placeholder="Email">
					<input type="text" class="input" name="user_name" autocomplete="off" placeholder="Username">
					<input type="password" class="input" name="user_pass" autocomplete="off" placeholder="Password">
					<input type="submit" name="submitkan" class="button" value="Sign Up">
				</form><!--.login-form-->
				<div class="help-text">
					<p>By signing up, you agree to our</p>
					<p><a href="#">Terms of service</a></p>
				</div><!--.help-text-->
			</div><!--.signup-tab-content-->

			<div id="login-tab-content" >
				<form class="login-form" action="" method="post">
					<input type="text" class="input" id="user_login" autocomplete="off" placeholder="Email or Username">
					<input type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password">
					<input type="checkbox" class="checkbox" id="remember_me">
					<label for="remember_me">Remember me</label>

					<input type="submit" class="button" value="Login">
				</form><!--.login-form-->
				<div class="help-text">
					<p><a href="#">Forget your password?</a></p>
				</div><!--.help-text-->
			</div><!--.login-tab-content-->
		</div><!--.tabs-content-->
	</div><!--.form-wrap-->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
