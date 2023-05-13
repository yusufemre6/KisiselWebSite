<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>İletişim</title>
    <link rel="icon" type="image/x-icon" href="../img/send.svg">
    <link rel="stylesheet" href="../css/iletisim.css">
</head>
<body class="bg-light">
    <div class="container-sm bg-dark">
        <div class="row row-1">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg bg-body-dark py-1 border-bottom">
                    <div class="container-fluid">
                        <a class="navbar-brand m-0 h1 fs-2 text-light opacity-75" aria-current="page" href="AnaSayfa.html"><i class="bi bi-code-slash me-2"></i><em>YE6</em></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item mx-3">
                                    <a class="nav-link pt-2 fs-5 text-light" href="hakkimda.php">Hakkımda</a>
                                </li>
                                <li class="nav-item mx-3">
                                    <a class="nav-link pt-2 fs-5 text-light" href="#">Özgeçmişim</a>
                                </li>
                                <li class="nav-item mx-3">
                                    <a class="nav-link pt-2 fs-5 text-light" href="#">Memleketim</a>
                                </li>
                                <li class="nav-item mx-3">
                                    <a class="nav-link pt-2 fs-5 text-light" href="#">İletişim</a>
                                </li>
                                <li class="nav-item mx-3">
                                    <a class="nav-link text-light icon-link icon-link-hover fs-5 " href="../php/login.php">
                                        Giriş Yap 
                                        <i class="bi bi-box-arrow-in-right mb-2" aria-hidden="true"><use xlink:href="#arrow-right"></use></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row row-2">
            <div class="col-12 d-flex align-items-center justify-content-center px-0">
                <form action="" class="form-communication mx-1">
                    <div class="container border border-light rounded-4">
                        <div class="row px-3 my-3">
                            <div class="col-sm-6 px-0">
                                <div class="form-floating px-1">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Adınız</label>
                                </div>
                            </div>
                            <div class="col-sm-6 px-0">
                                <div class="form-floating px-1">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Soyadınız</label>
                                </div>
                            </div>
                        </div>
                        <div class="row px-3 my-3">
                            <div class="col px-0 text-light">
                                <p>Cinsiyet:</p>
                            </div>
                            <div class="col px-0">
                                <div class="row">
                                    <div class="col text-light">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Erkek
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col text-light">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Kadın
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-3 px-3">
                            <div class="col px-0 text-light ">
                                <p class="mt-2">Mesaj İletim Çeşidi:</p>
                            </div>
                            <div class="col px-0 text-light">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Mesaj İletim Çeşidi Seçiniz</option>
                                    <option value="Email">Email</option>
                                    <option value="Sms">Sms</option>
                                </select>
                            </div>
                        </div>
                        <div class="row my-3 px-3">
                            <div class="col-4 px-0 text-light">
                                <label for="customRange3" class="form-label">Yaşınız(18-30):</label>
                            </div>
                            <div class="col-8 px-0 text-light">
                                <input type="range" class="form-range border rounded-4 " min="18" max="30" step="1" id="customRange3">
                            </div>
                        </div>
                        <div class="row my-3 px-3">
                            <div class="col px-0 text-light">
                                <div class="form-floating"px-1>
                                    <textarea class="form-control" maxlength="1000" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label class="text-dark" for="floatingTextarea2">Mesajınızı buraya bırakınız...</label>
                                </div>
                            </div>
                        </div>
                        <div class="row my-3 px-3">
                           <div class="col px-0 text-light">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Mesajımı kontrol ettim onaylıyorum
                                </label>
                            </div>
                           </div>
                        </div>
                        <div class="row my-3 px-3">
                            <div class="col-6 px-0 text-light">
                                <button type="button" class="btn btn-light">Gönder</button>
                            </div>
                            <div class="col-6 px-0 text-light">
                                <button type="button" class="btn btn-primary">Temizle</button>
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row row-3">
            <footer class="d-flex flex-wrap justify-content-between align-items-center border-top py-3">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-body-light text-light text-decoration-none lh-1">
                        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                    </a>
                    <span class=" mb-md-0 text-body-light text-light">© 2023 Personal, Inc</span>
                </div>
                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex me-4 pe-1">
                    <li class="ms-3"><a class="text-body-light text-light" href="#"><i class="bi bi-instagram fs-5"></i></a></li>
                    <li class="ms-3"><a class="text-body-light text-light" href="#"><i class="bi bi-twitter fs-5"></i></a></li>
                    <li class="ms-3"><a class="text-body-light text-light" href="#"><i class="bi bi-linkedin fs-5"></i></a></li>
                    <li class="ms-3"><a class="text-body-light text-light" href="#"><i class="bi bi-github fs-5"></i></a></li>
                </ul>
            </footer>
        </div>
    </div>
    <script src="../javascript/iletisim.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script></body>
</body>
</html>