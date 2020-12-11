<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
#menu a{
    color: white;
    margin-right: 100px;
    margin-left: 100px; 
}
.body{
    display: flex;
    width: 100%;
    justify-content: center;
}
.menu{
    width: 100%;
}
.profil{
    border:5px solid blue;
}
#navbarTogglerDemo01 a{
  font-size: 20px;
}

    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/91e0a5b445.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <!--Navigator-->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary" id="navbarr">
        <a class="navbar-brand" href="#"><b> NAMA</b></a>
        <button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link active text-blue text-white" href="#" style=""><i class="far fa fa-user-o"></i> [Profile]<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fa fa-bell-o"></i> [Notification]</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fa fa-question-circle-o"></i> [FAQ]</a>
                </li>
            </ul>
        </div>
    </nav>

    <!--Main Menu-->
        
    <div class="row no-gutters mt-3">
    <div class="col-md-2 bg-primary mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
            
            <li class="nav-item ">
                <b><a class="nav-link text-white" href="#"><i class="fas fa-home"></i> Home</a><hr class="bg-secondary"></b>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-white" href="#"><i class="fas fa-book"></i>  Mata Pelajaran</a><hr class=" bg-secondary">
            </li>
            <li class="nav-item ">
                <a class="nav-link text-white" href="#"><i class="fas fa-user-check"></i>  Presensi</a><hr class=" bg-secondary">
            </li>
        </ul>
    </div>

<div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-home"></i><b> Home/</b>Beranda</h3><hr><!--jangan lupa-->
        
        <div class="container-fluid" id="profil">

        </br><div class="card-columns">
  <div class="card bg-secondary border-info">
    <img src="cangar.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Hidup perlu perjuangan</h5>
      <p class="card-text">"Masalah di dunia ini terjadi saat orang bodoh terlalu yakin dan orang pintar penuh dengan keraguan" (Bertrand Russell)</p>
    </div>
  </div>
  </br><div class="card p-3 border-info">
    <blockquote class="blockquote mb-0 card-body">
      <p>"Kamu harus melihat sisi gelap seseorang, sebelum kamu mengenal mereka seutuhnya"</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          Pierre Bouvier <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  </br><div class="card border-info">
    <img src="malang.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Semangat</h5>
      <p class="card-text">Ketika orang-orang menolakmu, belajarlah untuk menghangatkan tangan kananmu dengan tangan kirimu. (Jack Ma)</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  </br><div class="card bg-primary text-white text-center p-3 border-info">
    <blockquote class="blockquote mb-0">
      <p>Tidak punya uang adalah kondisi sementara, tetapi mental miskin akan membuatmu miskin sementara.</p>
      <footer class="blockquote-footer text-white">
        <small>
          Someone famous is <cite title="Source Title">Syafi'i Efendi</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  </br><div class="card text-center border-info">
    <div class="card-body">
      <h5 class="card-title">JANGAN LUPA TUGAS</h5>
      <p class="card-text">SEMANGAT !</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card border-info">
    <img src="mieayam.jpg" class="card-img-top" alt="...">
  </div>
  </br><div class="card p-3 text-right border-info">
    <blockquote class="blockquote mb-0">
      <p>JANGAN LUPA BELAJAR</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  </br><div class="card border-info">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div></br>

        
            </div>
            </br><div class="container-fluid border-info" id="kolomabsen">
          <div class="row">
            <div class="col">
              <div class="card text-center border-info" >

              <div class="card-body" >
                <h5 class="card-title">INFO LOMBA</h5>
                <p class="card-text">[Himpunan Mahasiswa Jurusan Bahasa dan Sastra Indonesia FBS UNESA mempersembahkan].Festival Bahasa Indonesia 2020. Halo teman-teman semua. Ada kabar gembira nih untuk kalian pelajar SMA/SMK/MA/ sederajat se Indonesia. Dalam rangka memperingati bulan bahasa, HMJBSI FBS UNESA mengadakan Festival Bahasa Indonesia dengan Tema “Wujud Cinta Bahasa dan Sastra Indonesia di tengah Pandemi”. Adapun jenis lomba yang akan dilombakan adalah sebagai berikut: 1.Cipta puisi 2.Cipta cerpen</p>
                <a href="#" class="btn btn-primary">Konfirmasi</a>
                
              </div>

          </div>
            </div>
          </div></br>

          <div class="row">
            <div class="col">
              <div class="card text-center border-info">

              <div class="card-body ">
                <h5 class="card-title">INFO BEASISWA</h5>
                <p class="card-text">Bagi kamu pelajar SMA/Sederajat yang ada di Indonesia, ada tawaran menarik yang bisa dipertimbangkan terutama bagi kamu yang ingin mengembangkan diri. Saat ini, Departemen Luar Negeri Amerika Serikat menawarkan Beasiswa Penuh pertukaran pelajar SMA atau Sederajat ke Amerika Serikat. Program Kennedy-Lugar Youth Exchange and Study (YES) didirikan pada tahun 2003 dan telah memfasilitasi lebih dari 1000 siswa Indonesia ke Amerika Serikat. Berikut informasi lebih detail mengenai Pertukaran Pelajar SMA /Sederajat ke Luar Negeri oleh YES Program.</p>
                </br>
                <a href="#" class="btn btn-primary">Konfirmasi</a>
              </div>

          </div>
            </div>
          </div></br>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>