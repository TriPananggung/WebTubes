<?= $this->extend('Pages/Siswa/templatesiswa'); ?>

<?= $this->section('isi'); ?>
<div class="col-md-8 p-5 pt-2">
  <h3><i class="fa fa-list"></i><b> Data Nilai Mata Pelajaran</b></h3>
  <hr>
  <!--jangan lupa-->

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="datanilai.html">Data Siswa</a></li>
      <li class="breadcrumb-item">Mata Pelajaran/</li>
    </ol>
  </nav>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Mata Pelajaran</th>
        <th scope="col">Overall</th>
        <th scope="col">Keterangan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Matematika</th>
        <td>Ottoke Samuel</td>
        <td>
          <a href="/Siswa/datanilaimasuk" class="badge badge-info">Detail</a>
        </td>
      </tr>
      <tr>
        <th scope="row">Bahasa Inggris</th>
        <td>Jacob Thornton</td>
        <td>
          <a href="/Siswa/datanilaimasuk" class="badge badge-info">Detail</a>
        </td>
      </tr>
      <tr>
        <th scope="row">Bahasa Indonesia</th>
        <td>Larry Bird</td>
        <td>
          <a href="/Siswa/datanilaimasuk" class="badge badge-info">Detail</a>
        </td>
      </tr>
    </tbody>
  </table>

</div>
</div>

<?= $this->endSection(); ?>