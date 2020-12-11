<?= $this->extend('Pages/Guru/templateguru'); ?>

<?= $this->section('isi'); ?>
<!--Isi Kelas-->
<div class="container-fluid">
  <table class="table table-striped" style="margin-top:80px;">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Nama Siswa</th>
        <th scope="col">Nilai Tugas 1</th>
        <th scope="col">Nilai Tugas 2</th>
        <th scope="col">Nilai Tugas 3</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Tri</td>
        <td>80</td>
        <td>89</td>
        <td>89</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Kurin</td>
        <td>95</td>
        <td>93</td>
        <td>93</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Adi</td>
        <td>98</td>
        <td>100</td>
        <td>100</td>
      </tr>
      <tr class="bg-dark text-white">
        <th colspan="2" style="text-align: center;">Rata-Rata</th>
        <td>Nilai tugas 1</td>
        <td>Nilai tugas 2</td>
        <td>Nilai tugas 3</td>
      </tr>
    </tbody>
  </table>
</div>

<?= $this->endSection(); ?>