    <?= $this->extend('/layout/template'); ?>

    <?= $this->section('isi'); ?>
    <!-- JUMBOTRON -->
    <div class="jumbo">
      <div class="kotak">
        <!-- <h1>MEJA</h1>
        <h2> KELAS</h2> -->
        <div class="awan">
          <img src="/img/cloud1.png" style="--tripananggung:1">
          <img src="/img/cloud2.png" style="--tripananggung:2">
          <img src="/img/cloud3.png" style="--tripananggung:3">
          <img src="/img/cloud4.png" style="--tripananggung:4">
          <img src="/img/cloud5.png" style="--tripananggung:5">
        </div>
      </div>
    </div>

    <hr id="ten">
    <div class="container" id="visi">
      <div class="row">
        <div class="col-md-6 text-center">
          <h2>VISI</h2><br>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, aliquid at nostrum dolorem et dolor laboriosam possimus corrupti ex ipsum cupiditate sit sapiente fugiat nihil maiores amet commodi officiis necessitatibus.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-6 text-center" id="misi">
          <h2>MISI</h2><br>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, aliquid at nostrum dolorem et dolor laboriosam possimus corrupti ex ipsum cupiditate sit sapiente fugiat nihil maiores amet commodi officiis necessitatibus.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>

    <!-- PROFIL -->
    <div class="judul">
      <h2>PROFIL</h2>
      <h3>Informasi Terkini</h3>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="icon">
            <h3>Fasilitas</h3>
            <img src="/img/icon1.png" alt="">
            <p>Lorem, ipsum dolor sit amet.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="icon">
            <h3>Prestasi</h3>
            <img src="/img/icon2.png" alt="">
            <p>Lorem, ipsum dolor sit amet.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="icon">
            <h3>Organisasi</h3>
            <img src="/img/icon4.png" alt="">
            <p>Lorem, ipsum dolor sit amet.</p>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-6">
          <div class="icon">
            <h3>Siswa</h3>
            <img src="/img/icon3.png" alt="">
            <p>Lorem, ipsum dolor sit amet.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="icon">
            <h3>SDM</h3>
            <img src="/img/icon5.png" alt="">
            <p>Lorem, ipsum dolor sit amet.</p>
          </div>
        </div>
      </div>
    </div>


    <!-- SLOGAN SEKOLAH -->
    <div class="parallax-container">
      <div class="parallax">
        <img src="/img/slogan.jpg" alt="Slogan">
      </div>
    </div>
    <hr id="ber">

    <div class="judul">
      <h2>BERITA</h2>
      <h3>Informasi Terkini</h3>
    </div>
    <!-- ISI -->
    <div class="container-fluid">
      <div class="row">
        <?php foreach ($beritaData as $b) : ?>
          <div class="col-md-4">
            <div class="card text-dark mb-3" id="beritaku">
              <img src="/img/<?= $b['gambar']; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $b['judul']; ?></h5>
                <div class="isic">
                  <p class="card-text"><?= $b['isi']; ?></p>
                </div>
                <a href="/berita/<?= $b['slug']; ?>" class="btn" style="background-color: rgb(255, 190, 136);">Detail</a>
                <p class="card-text"><small class="text-muted text-info">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <hr id="gal">

    <div class="judul">
      <h2>GALERI</h2>
    </div>

    <div class="galeri">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3" id="galery">
            <div class="gambar">
              <img src="/img/galeri1.jpg" alt="">
            </div>
            <div class="tulisan">
              <h4>Judul</h4>
              <p>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Neque, eum! Pariatur exercitationem et excepturi illo facere fugit adipisci voluptatibus explicabo, dolor, porro sed enim in, nulla sit, est quidem delectus.</p>
            </div>
          </div>
          <div class="col-md-3" id="galery">
            <div class="gambar">
              <img src="/img/galeri2.jpg" alt="">
            </div>
            <div class="tulisan">
              <h4>Judul</h4>
              <p>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Neque, eum! Pariatur exercitationem et excepturi illo facere fugit adipisci voluptatibus explicabo, dolor, porro sed enim in, nulla sit, est quidem delectus.</p>
            </div>
          </div>
          <div class="col-md-3" id="galery">
            <div class="gambar">
              <img src="/img/galeri3.jpg" alt="">
            </div>
            <div class="tulisan">
              <h4>Judul</h4>
              <p>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Neque, eum! Pariatur exercitationem et excepturi illo facere fugit adipisci voluptatibus explicabo, dolor, porro sed enim in, nulla sit, est quidem delectus.</p>
            </div>
          </div>
          <div class="col-md-3" id="galery">
            <div class="gambar">
              <img src="/img/galeri4.jpg" alt="">
            </div>
            <div class="tulisan">
              <h4>Judul</h4>
              <p>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Neque, eum! Pariatur exercitationem et excepturi illo facere fugit adipisci voluptatibus explicabo, dolor, porro sed enim in, nulla sit, est quidem delectus.</p>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3" id="galery">
            <div class="gambar">
              <img src="/img/galeri5.jpg" alt="">
            </div>
            <div class="tulisan">
              <h4>Judul</h4>
              <p>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Neque, eum! Pariatur exercitationem et excepturi illo facere fugit adipisci voluptatibus explicabo, dolor, porro sed enim in, nulla sit, est quidem delectus.</p>
            </div>
          </div>
          <div class="col-md-3" id="galery">
            <div class="gambar">
              <img src="/img/galeri6.jpg" alt="">
            </div>
            <div class="tulisan">
              <h4>Judul</h4>
              <p>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Neque, eum! Pariatur exercitationem et excepturi illo facere fugit adipisci voluptatibus explicabo, dolor, porro sed enim in, nulla sit, est quidem delectus.</p>
            </div>
          </div>
          <div class="col-md-3" id="galery">
            <div class="gambar">
              <img src="/img/galeri7.jpg" alt="">
            </div>
            <div class="tulisan">
              <h4>Judul</h4>
              <p>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Neque, eum! Pariatur exercitationem et excepturi illo facere fugit adipisci voluptatibus explicabo, dolor, porro sed enim in, nulla sit, est quidem delectus.</p>
            </div>
          </div>
          <div class="col-md-3" id="galery">
            <div class="gambar">
              <img src="/img/galeri8.jpg" alt="">
            </div>
            <div class="tulisan">
              <h4>Judul</h4>
              <p>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Neque, eum! Pariatur exercitationem et excepturi illo facere fugit adipisci voluptatibus explicabo, dolor, porro sed enim in, nulla sit, est quidem delectus.</p>
            </div>
          </div>
        </div>

        <br>
        <div class="row">
          <div class="col-md-3" id="galery">
            <div class="gambar">
              <img src="/img/galeri5.jpg" alt="">
            </div>
            <div class="tulisan">
              <h4>Judul</h4>
              <p>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Neque, eum! Pariatur exercitationem et excepturi illo facere fugit adipisci voluptatibus explicabo, dolor, porro sed enim in, nulla sit, est quidem delectus.</p>
            </div>
          </div>
          <div class="col-md-3" id="galery">
            <div class="gambar">
              <img src="/img/galeri6.jpg" alt="">
            </div>
            <div class="tulisan">
              <h4>Judul</h4>
              <p>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Neque, eum! Pariatur exercitationem et excepturi illo facere fugit adipisci voluptatibus explicabo, dolor, porro sed enim in, nulla sit, est quidem delectus.</p>
            </div>
          </div>
          <div class="col-md-3" id="galery">
            <div class="gambar">
              <img src="/img/galeri7.jpg" alt="">
            </div>
            <div class="tulisan">
              <h4>Judul</h4>
              <p>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Neque, eum! Pariatur exercitationem et excepturi illo facere fugit adipisci voluptatibus explicabo, dolor, porro sed enim in, nulla sit, est quidem delectus.</p>
            </div>
          </div>
          <div class="col-md-3" id="galery">
            <div class="gambar">
              <img src="/img/galeri8.jpg" alt="">
            </div>
            <div class="tulisan">
              <h4>Judul</h4>
              <p>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Neque, eum! Pariatur exercitationem et excepturi illo facere fugit adipisci voluptatibus explicabo, dolor, porro sed enim in, nulla sit, est quidem delectus.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="row">
        <div class="col"></div>
      </div>
    </div>

    <?= $this->endSection(); ?>