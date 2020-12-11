<?= $this->extend('Pages/Guru/templateguru'); ?>

<?= $this->section('isi'); ?>
<!--Isi Kelas-->
<div class="container-fluid" id="menu">
  <div><a class="btn btn-light" href="">Tambah Tugas</a></div>
  <div class="card bg-light mb-3" style="width: 80%;  margin:auto;">
    <?php foreach ($tugas as $t) : ?>
      <div class="card-body">
        <h5 class="card-title"><?= $t['judul_tugas']; ?></h5>
        <p class="card-text"><?= $t['isi_tugas']; ?></p>
        <a href="#" class="btn btn-info text-white">Edit Tugas</a>
      </div>
    <?php endforeach; ?>
  </div>

</div>

<?= $this->endSection(); ?>