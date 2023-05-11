<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Abstract" content="Kişisel Web Site">
        <meta name="Author" content="Yusuf Emre YILDIZ, yusufemre74ye6@gmail.com">
        <meta name="Copyright" content="Bu sitenin telif hakkı yoktur.">
        <meta name="description" content="Kişisel Web Site">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <title>Hakkımda</title>
        <link rel="icon" type="image/x-icon" href="../img/person.svg">
        <link rel="stylesheet" href="../css/hakkimda.css">
</head>
<body class="bg-dark">
    <?php
	    session_start(); // Session'ı başlat
	    if(isset($_SESSION["sifre"])) {
		    echo '<div class="alert alert-success" role="alert">';
		    echo 'Hoş geldiniz ' . $_SESSION["sifre"] . '!';
		    echo '</div>';
		    unset($_SESSION["sifre"]); // Session'ı temizle
	    }
	?>
    <div class="container-sm container-box bg-light">
        <!-- navbar starts -->
        <div class="row header">
            <nav class="navbar navbar-expand-lg bg-body-tertiary py-1 border-bottom">
                <div class="container-fluid">
                    <a class="navbar-brand m-0 h1 fs-2 text-dark opacity-75" aria-current="page" href="AnaSayfa.html"><i class="bi bi-code-slash me-2"></i><em>YE6</em></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item mx-3">
                                <a class="nav-link pt-2 fs-5 text-dark" href="#">Hakkımda</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link pt-2 fs-5 text-dark" href="#">Özgeçmişim</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link pt-2 fs-5 text-dark" href="#">Memleketim</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link pt-2 fs-5 text-dark" href="#">İletişim</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link text-dark icon-link icon-link-hover fs-5 " href="../php/login.php">
                                    Giriş Yap 
                                    <i class="bi bi-box-arrow-in-right mb-2" aria-hidden="true"><use xlink:href="#arrow-right"></use></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- navbar ends -->

        <!-- wrapper starts -->
        <div class="row main mt-5">
            <div class="container">
                <div class="row mb-2 border border-top border-bottom">
                    <div class="col-sm-3 option_wrap option pt-3 fs-5" id="option_1">
                        <p>Ben Kimim?</p>
                    </div>
                    <div class="col-sm-3 option_wrap option pt-3 fs-5" id="option_2">
                        <p>Hobilerim</p>
                    </div>
                    <div class="col-sm-3 option_wrap option pt-3 fs-5" id="option_3">
                        <p>Etkinlikler</p>
                    </div>
                    <div class="col-sm-3 option_wrap option pt-3 fs-5" id="option_4">
                        <p>Enlerim</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 content">
                        <div class="option_content option_1">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item list-group-item-action list-group-item-light">Adım: Yusuf Emre</li>
                                <li class="list-group-item list-group-item-action list-group-item-light">Soyadım: Yıldız</li>
                                <li class="list-group-item list-group-item-action list-group-item-light">D.Yılım ve D.Yerim: 2003-Sultanbeyli/İstanbul</li>
                                <li class="list-group-item list-group-item-action list-group-item-light">Tuttuğum Takım: Galatasaray</li>
                                <li class="list-group-item list-group-item-action list-group-item-light">Memleketim: Bartın/Türkiye</li>
                              </ul>
                        </div>
                        <div class="option_content option_2">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item list-group-item-action list-group-item-light">Spor branşlarında; futbol oynamayı, yüzmeyi ve doğa yürüyüşü yapmayı severim.</li>
                                <li class="list-group-item list-group-item-action list-group-item-light">Kültürel faaliyetlerde; tiyatro oyunları ve sinema, geziler ve tarhi mekan ziyaretleri, el sanatları ve geleneksel el işi etkinlikleri ilgimi çeker.</li>
                                <li class="list-group-item list-group-item-action list-group-item-light">Müzikal aletlerde klarneti çalmasını bilmesem de dinlemeyi severim ve öğrenmek istiyorum.</li>
                                <li class="list-group-item list-group-item-action list-group-item-light">Yabancı dil öğrenmeye meraklıyım ve vakit buldukça çabalıyorum.</li>
                                <li class="list-group-item list-group-item-action list-group-item-light">Bahçe işleri ve toprak ile uğraşmayı severim.</li>
                                <li class="list-group-item list-group-item-action list-group-item-light">Yazılım programlama gelir elde etmek istesem de ayrıca benim için bir hobidir.</li>
                            </ul>
                        </div>
                        <div class="option_content option_3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item list-group-item-action list-group-item-light">İlkokulda okulumu temsilen satranç turnuvalarına katıldım.</li>
                                <li class="list-group-item list-group-item-action list-group-item-light">10-12 yaşlarım arasında yüzme sporuyla ilgilendim ufak çaplı yarışmalarda bulundum.</li>
                                <li class="list-group-item list-group-item-action list-group-item-light">12-18 yaşlarım arasında da lisanslı olarak amatör bir kulüpte futbol oynadım.</li>
                                <li class="list-group-item list-group-item-action list-group-item-light">Lisede tübitak projelerinde bulundum.</li>
                                <li class="list-group-item list-group-item-action list-group-item-light">Liseyi bitirdikten sonra kısa süreli MSÜ serüvenim oldu.</li>
                                <li class="list-group-item list-group-item-action list-group-item-light">2021 yazında Yalova Hava Meydan Kuvvetleri'nde hava harp okulu uçuş eğitimlerine katıldım ama sonrasında kendi isteğimle okulu bıraktım.</li>
                                <li class="list-group-item list-group-item-action list-group-item-light">O dönem içinde sivile geçip Sakarya Üniversitesi'ne başladım.</li>
                            </ul>
                        </div>
                        <div class="option_content option_4">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item list-group-item-action list-group-item-light">En sevdiğim renk: Kırmızı</li>
                                <li class="list-group-item list-group-item-action list-group-item-light">En sevdiğim spor: Futbol</li>
                                <li class="list-group-item list-group-item-action list-group-item-light">En sevdiğim programlama dili: Javascript</li>
                                <li class="list-group-item list-group-item-action list-group-item-light">En çok çalıştığım programlama dili: C++ ve C#</li>
                                <li class="list-group-item list-group-item-action list-group-item-light">En sevdiğim database: PostgreSql</li>
                                <li class="list-group-item list-group-item-action list-group-item-light">En sevdiğim şehir: İstanbul</li>
                                <li class="list-group-item list-group-item-action list-group-item-light">En sevdiğim çiçek: Gül</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <!-- wrapper ends -->

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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../javascript/hakkimda.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>