<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>Mesaj Kutusu</title>
    <link rel="icon" type="image/x-icon" href="../img/chat-left-text.svg">
    <link rel="stylesheet" href="../css/iletisim.css">
</head>
<body class="bg-dark">
    <p class="m-5"><a href="../html/iletisim.html" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover border border-danger p-2"><i class="bi bi-chevron-double-left"></i> İletişim Sayfasına Geri Dön </a></p>
        
<?php
  // Form verilerini alın
  $ad = $_POST['isim'];
  $soyad = $_POST['soyisim'];
  $cinsiyet = $_POST['cinsiyet'];
  $yas = $_POST['yas'];
  $iletisim = $_POST['iletisim-tercihi'];
  $mesaj = $_POST['mesaj-kutusu'];

  // Gönderilen verileri ekrana yazdır
  echo "<div class=\"container my-5\">";
  echo "<div class=\"row my-2 text-light\"><div class=\"col\">Adınız: ".$ad."</div></div>";
  echo "<div class=\"row my-2 text-light\"><div class=\"col\">Soyadınız: ".$soyad."</div></div>";
  echo "<div class=\"row my-2 text-light\"><div class=\"col\">Cinsiyetiniz: ".$cinsiyet."</div></div>";
  echo "<div class=\"row my-2 text-light\"><div class=\"col\">Yaşınız: ".$yas."</div></div>";
  echo "<div class=\"row my-2 text-light\"><div class=\"col\">İletişim Türü: ".$iletisim."</div></div>";
  echo "<div class=\"row my-2 text-light\"><div class=\"col\">Mesajınız: \"".$mesaj."\"</div></div>";
  ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script></body>
</body>
</html>