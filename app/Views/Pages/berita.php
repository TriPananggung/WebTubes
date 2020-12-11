<?= $this->extend('layout/template'); ?>

<?= $this->section('isi'); ?>
<div class="container-fluid ">
  <div class="row justify-content-around">
    <div class="col-sm-8 isi">
      <h1><?= $beritaData['judul']; ?></h1>
      <div class="judulkeatas" style="border:5px solid rgb(255, 190, 136); padding:6px; border-radius:5px;">
        <img src="/img/<?= $beritaData['gambar']; ?>" alt="">
        <p><?= $beritaData['isi']; ?></p>
      </div>
    </div>

    <div class="col-sm-3 isi" id="atur">

      <h2>Berita Lainnya</h2>
      <div class="kelompok">
        <img src="/img/berita2.jpg" alt="">
        <a href="#">Nama berita 2</a>
      </div>
      <div class="kelompok">
        <img src="/img/berita3.jpg" alt="">
        <a href="#">Nama berita 3</a>
      </div>
    </div>

  </div>
</div>

<?= $this->endSection(); ?>