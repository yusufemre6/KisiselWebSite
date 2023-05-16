<?php
session_start();

// Doğru kullanıcı adı ve şifre
$dogruKullaniciAdi = "yusuf.yildiz8@ogr.sakarya.edu.tr";
$dogruSifre = "b211210090";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcı adı ve şifre post edildiğinde çalışacak kodlar
    $kullaniciAdi = $_POST["kullaniciAdi"];
    $sifre = $_POST["sifre"];

    if ($kullaniciAdi == $dogruKullaniciAdi && $sifre == $dogruSifre) {
        // Doğru kullanıcı adı ve şifre, ana sayfaya yönlendir
        $_SESSION["sifre"] = $sifre; // "sifre" adlı session değişkenine şifreyi ata
        header("Location: hakkimda.php");
        exit();
    } else {
        // Yanlış kullanıcı adı veya şifre, hata mesajını oturuma kaydet
        $_SESSION["hataMesaji"] = "Kullanıcı adı veya şifre yanlış!";
        header("Location: login.php"); // Sayfayı yenile
        exit();
    }
}

// Hata mesajını kontrol et
if (isset($_SESSION["hataMesaji"])) {
    echo '<div class="alert alert-danger" role="alert" id="myDiv">';
    echo $_SESSION["hataMesaji"];
    echo '</div>';
    unset($_SESSION["hataMesaji"]); // Hata mesajını oturumdan kaldır
}                            
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="../img/person-circle.svg">
    <title>Giriş Yap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body class="bg-dark">
    <div class="container-sm container-box bg-light">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-body-tertiary py-1 border-bottom">
                <div class="container-fluid">
                    <a class="navbar-brand m-0 h1 fs-2 text-dark opacity-75" aria-current="page" href="AnaSayfa.html"><i class="bi bi-code-slash me-2"></i><em>YE6</em></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item mx-3">
                                <a class="nav-link pt-2 fs-5 text-dark" href="../php/hakkimda.php">Hakkımda</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link pt-2 fs-5 text-dark" href="../html/ozgecmisim.html">Özgeçmişim</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link pt-2 fs-5 text-dark" href="#">Memleketim</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link pt-2 fs-5 text-dark" href="../php/iletisim.php">İletişim</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link text-dark icon-link icon-link-hover fs-5 " href="#">
                                    Giriş Yap 
                                    <i class="bi bi-box-arrow-in-right mb-2" aria-hidden="true"><use xlink:href="#arrow-right"></use></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row my-5">
            <div class="col px-0">
                <div class="container login border">
                    <div class="row">
                        <div class="login100-form-title" style="background-image: url(../img/matrix.jpg);">
                            <span class="login100-form-title-1">
                                Giris Yap
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <form class="needs-validation" method="POST" action="">
                            <div class="form-group my-3 was-validated">
                                <label class="form-label" for="kullanici-adi">Kullanıcı Adı</label>
                                <input class="form-control" type="email" name="kullaniciAdi" id="kullanici-adi" required>
                                <div class="invalid-feedback">Lütfen kullanıcı adınızı giriniz</div>
                            </div>
                            <div class="form-group my-3 was-validated">
                                <label class="form-label" for="sifre">Şifre</label>
                                <input class="form-control" type="password" minlength="10" maxlength="10" name="sifre" id="sifre" required>
                                <div class="invalid-feedback"> Lütfen şifrenizi giriniz</div>
                            </div>
                            <input class="btn btn-dark w-100" type="submit" value="Giris Yap" onclick="validateEmail()">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer starts -->
    <div class="container-sm footer bg-light">
        <footer class="d-flex flex-wrap justify-content-between align-items-center border-top py-3">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                </a>
                <span class=" mb-md-0 text-body-secondary">© 2023 Personal, Inc</span>
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex me-4 pe-1">
                <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-instagram fs-5"></i></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-twitter fs-5"></i></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-linkedin fs-5"></i></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-github fs-5"></i></a></li>
            </ul>
        </footer>
    </div>
    <!-- footer ends -->
    <script src="../javascript/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script></body>
</html>