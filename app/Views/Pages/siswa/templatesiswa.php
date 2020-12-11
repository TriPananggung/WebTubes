<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        /* #menu a {
            color: white;
            margin-right: 100px;
            margin-left: 100px;
        }
        
        /* .body {
            display: flex;
            width: 100%;
            justify-content: center;
        } */
        #navbarr {
            background-color: rgb(255, 190, 136);
        }

        .menu {
            width: 100%;
        }

        #navbarTogglerDemo01 a {
            font-size: 20px;
        }

        .profil.atas img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
        }

        .nav-item a {
            margin-left: 5px;
            font-weight: bold;

        }

        .nav-item img,
        h3 img {
            width: 40px;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/91e0a5b445.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/ujicoba.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title><?= $title; ?></title>
</head>

<body>
    <!--Navigator-->
    <nav class="navbar navbar-expand-lg navbar-light" id="navbarr">
        <div class="profil atas"><img src="/img/adi.jpeg" alt=""></div>
        <a class="navbar-brand" href="/siswa"><b> Adi Pramono</b></a>
        <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <!-- <li class="nav-item active">
                    <a class="nav-link active text-blue text-white" href="/siswa" style=""><i class="far fa fa-user-o"></i> [Profile]<span class="sr-only">(current)</span></a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="/siswa/notifikasi"><img src="/img/bell.png" alt="" style="margin-top: 15px;"> [Notification]</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/siswa/faq"><img src="/img/problem.png" alt="" style="width:60px;"> [FAQ]</a>
                </li>

                <!-- <li class="nav-item">
                    <a><img src="zz.jpg" class="card-img-center" alt="nama foto" width="35px" height="50px"></a>
                </li> -->
            </ul>
        </div>
    </nav>

    <!--Main Menu-->

    <div class="row no-gutters mt-3">
        <div class="col-md-2 mt-2 pr-3 pt-4" style="background-color:rgb(53,63,176) ;">
            <ul class="nav flex-column ml-3 mb-5">

                <li class="nav-item ">
                    <!-- <a class="nav-link text-white" href="/siswa/beranda"><i class="fas fa-home"></i> Home</a> -->
                    <a class="nav-link text-white" href="/siswa/beranda"><img src="/img/homepage.png" alt=""> Home</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item ">
                    <!-- <a class="nav-link text-white" href="/siswa/matapelajaran"><i class="fas fa-book"></i> Mata Pelajaran</a> -->
                    <a class="nav-link text-white" href="/siswa/matapelajaran"><img src="/img/open-book.png" alt="">Mata Pelajaran</a>
                    <hr class=" bg-secondary">
                </li>
                <li class="nav-item ">
                    <b><a class="nav-link text-white" href="/siswa/absensi"><img src="/img/customer-review.png" alt=""> Presensi</a>
                        <hr class=" bg-secondary"></b>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-white" href="/siswa/datanilai"><img src="/img/score.png" alt=""> Data Nilai</a>
                    <hr class=" bg-secondary">
                </li>
                <li class="nav-item mt-3">
                    <a class="nav-link text-white" href="/logout">
                        <img src="/img/exit.png" alt="" class="iconku">
                        Logout</a>
                </li>
            </ul>
        </div>

        <?= $this->renderSection('isi'); ?>
        <!-- FOOTER -->

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>