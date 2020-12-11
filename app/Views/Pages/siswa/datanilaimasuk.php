<?= $this->extend('Pages/Siswa/templatesiswa'); ?>

<?= $this->section('isi'); ?>

<div class="col-md-8 p-5 pt-2">
  <h3><i class="fa fa-list"></i><b> Data Nilai/</b> Nilai Pelajaran</h3>
  <hr>
  <!--jangan lupa-->

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="datanilai.html">Data Siswa</a></li>
      <li class="breadcrumb-item"><a href="datanilaimapel.html">Mata Pelajaran</a></li>
      <li class="breadcrumb-item active" aria-current="page">Matematika</li>
    </ol>
  </nav>

  <div class="container" id="datanilai">


    <br>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Tugas</th>
          <th scope="col">Nilai</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Evaluasi I</td>
          <td>88</td>
        </tr>
        <tr>
          <td>Tugas Rumah</td>
          <td>89</td>
        </tr>
        <tr>
          <td>Evaluasi II</td>
          <td>87</td>
        </tr>
      </tbody>
    </table>

  </div>
</div>

<?= $this->endSection(); ?>