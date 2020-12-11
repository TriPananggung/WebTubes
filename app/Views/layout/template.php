<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- My CSS -->
    <link rel="stylesheet" href="<?= $cssku; ?>">
    <link rel="stylesheet" href="/css/csshead.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" rel="stylesheet">
    <!-- <script src="https:://kit.fontawesome.com/7c901f1a5.js" crossorigin="anonymous"></script> -->
    <title>
        <?= $title; ?>
    </title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ubah" id="navbarr">
        <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01" style="box-sizing: border-box; padding:0 50px;">

            <a class="navbar-brand" href="/" style="color:red; display:flex; box-sizing: border-box;">
                <p style="margin-top: 10px; color:rgb(56,25,162);">MEJA</p>
                <p style="margin-top: 10px;">KELAS</p>
            </a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <!-- <li class="nav-item active">
                    <a class="nav-link text-blue text-white" href="#" style="">Beranda <span class="sr-only">(current)</span></a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link " href=" <?= $tentang; ?>" id="atasku">Visi & Misi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= $berita; ?>" id="atasku">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= $galeri; ?>" id="atasku">Galeri</a>
                </li>
                <li class="nav-item">

                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" style="background-color:rgb(255,80,121);" id="cari" type="submit">Search</button> -->
                <a class="nav-link " href="/siswa" id="login">Login</a>
            </form>
        </div>
    </nav>

    <?= $this->renderSection('isi'); ?>


    <!-- FOOTER -->
    <footer class="text-white bg-dark" id="footerku">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4" id="foter">
                    <h3>Tentang</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est labore quos ea aperiam maiores accusantium ullam necessitatibus reprehenderit ad tenetur et, enim aliquam delectus inventore at, ex dolores voluptate? Quo?</p>
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-whatsapp"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                </div>
                <div class="col-sm-4" id="foter">
                    <h3>Alamat</h3>
                    <a href=""><i class="fad fa-map-marker-alt" aria-hidden="true"></i>Gorontalo</a><br>
                    <a href=""><i class="fad fa-phone-rotary"></i>082292021678</a> <br>
                    <a href=""><i class="fad fa-envelope-open-text"></i>Mejakelas@gmail.com</a>
                </div>
                <div class="col-sm-4">
                    <form action="<?= base_url('pages/savepesan'); ?>" method="POST">
                        <h3>Pesan</h3>
                        <label for="teks">Email</label><br><input type="text" id="teks" name="pengirim"><br>
                        <label for="pesan">Kritik & Saran</label><br><textarea type="teks" id="pesan" name="pesan"></textarea>
                        <button id="tombol">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <div class="punyaybn">
        <p>Copyright © MEJAKELAS | <?= date('Y'); ?></p>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="<?= $jsku; ?>"></script>

</body>

</html>