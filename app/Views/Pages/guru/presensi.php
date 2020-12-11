<?= $this->extend('Pages/Guru/templateguru'); ?>

<?= $this->section('isi'); ?>
<!--Isi Kelas-->
<div class="container" style="margin-top:70px;">
  <div class="table-responsive">

    <table class="table table-hover table-secondary">
      <thead>
        <tr class="bg-dark text-white">
          <th colspan="3" style="text-align: center;">MATEMATIKA</th>
        </tr>
        <tr>
          <th scope="col">Tanggal</th>
          <th scope="col">Kelas</th>
          <th scope="col">Lihat Absen</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>25-12-2019</td>
          <td> X-Ipa</td>
          <td><a href="" class="btn-info" style="padding:5px; border-radius:4px;">Lihat Data</a></td>
        </tr>
        <tr>
          <td>12-1-2020</td>
          <td> XI-Ips</td>
          <td><a href="" class="btn-info" style="padding:5px; border-radius:4px;">Lihat Data</a></td>
        </tr>
        <tr>
          <td>29-1-2020</td>
          <td>XII-Agama</td>
          <td><a href="" class="btn-info" style="padding:5px; border-radius:4px;">Lihat Data</a></td>
        </tr>
      </tbody>
    </table>
  </div>
  <?= $this->endSection(); ?>