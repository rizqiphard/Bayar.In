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

          if(isset($_POST['kirim'])){
            // echo "Halo";
            $idpengirim = $_POST["idpengirim"];
            $idpenerima = $_POST["idpenerima"];
            $nominal = $_POST["nominal"];
            $catatan = $_POST["catatan"];
            $noHpPenerima = $_POST["noHpPenerima"];
            $nominalDatabase;
            $pesan = " Anda mendapatkan kiriman sejumlah Rp. $nominal dari $idpengirim dengan pesan $catatan ";
            // echo "Halo, Selamat Sore :) <br>";
            // echo "Email  : $email <br>";

            $nominalTambahan = $_POST['nominal'];
            $nominal;

            $sql = "SELECT saldo FROM tb_profil WHERE id = '$idpenerima'";
            $result = mysqli_query($conn, $sql);

            while ($hasil = mysqli_fetch_array($result)) {
                  $nominalDatabase = $hasil['saldo'];
            }

            $nominalTotal = $nominalDatabase + $nominal;
            $sqlUpdate = " UPDATE `tb_profil` SET `saldo`= '$nominalTotal' WHERE id = '$idpenerima'";
            $resultUpdate = mysqli_query($conn, $sqlUpdate);





                      $curl = curl_init();

                      curl_setopt_array($curl, array(
                      CURLOPT_URL => "https://api.mainapi.net/smsnotification/1.0.0/messages",
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_ENCODING => "",
                      CURLOPT_MAXREDIRS => 10,
                      CURLOPT_TIMEOUT => 30,
                      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                      CURLOPT_CUSTOMREQUEST => "POST",
                      CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"msisdn\"\r\n\r\n$noHpPenerima\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"content\"\r\n\r\n Halo $idpenerima, $pesan\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
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
