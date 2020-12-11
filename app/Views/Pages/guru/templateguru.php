<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/91e0a5b445.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/css/cssguru.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title><?= $title; ?></title>
    <style>
        .nav-item img,
        h3 img {
            width: 30px;
        }

        #menu a {
            padding: 5px;
            border-radius: 3px;
            border: 2px solid rgb(56, 25, 162);
            color: black;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!--Navigator-->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Ubah Data Profil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="profil.php" method="post">
                        <div class="form-group form-group-sm">
                            <label for="inputAddress">Nama</label>
                            <input name="nama" type="text" class="form-control" id="inputAddress" placeholder="Nama ...">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Kelas</label>
                            <input name="kelas" type="text" class="form-control" id="inputAddress" placeholder="Kelas ...">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">No. Induk</label>
                            <input name="noink" type="text" class="form-control" id="inputAddress" placeholder="No. Induk ...">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">TTL</label>
                            <input name="ttl" type="text" class="form-control" id="inputAddress" placeholder="TTL ...">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Alamat</label>
                            <input name="alamat" type="text" class="form-control" id="inputAddress" placeholder="Alamat...">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Email</label>
                            <input name="email" type="text" class="form-control" id="inputAddress" placeholder="Email ...">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light " id="navbarr" style="background-color: rgb(255, 190, 136) ; top:0; height:80px; ">
        <a class="navbar-brand" href="#">[nama matkul/kelas]</a>
        <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link text-blue text-white" href="#" style=""><img src="/img/open-book.png" alt=""> [nama kelas 1]<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><img src="/img/open-book.png" alt=""> [nama kelas 2]</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><img src="/img/open-book.png" alt=""> [nama kelas 3 dst]</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" data-toggle="modal" data-target="#staticBackdrop" href="#"><img src="/img/settings.png" alt=""> Edit Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/Guru"><img src="/Img/exit.png" alt=""> [kembali ke halaman utama]</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="kl" id="menu" style="background-color: rgb(255, 190, 136) ; margin-top:25px;">
        <div class="row justify-content-center" id="baris" style=" text-align:center;">
            <div class="col-12">
                <a class="btn" href="/Guru/matkul">Materi Kelas</a>
                <a class="btn" href="/Guru/tugas">Tugas Kelas</a>
                <a class="btn" href="/Guru/anggota">Anggota Kelas</a>
                <a class="btn" href="/Guru/nilai">Nilai</a>
                <a class="btn" href="/Guru/presensi">Presensi</a>
            </div>
        </div>
    </div>
    <?= $this->renderSection('isi'); ?>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>