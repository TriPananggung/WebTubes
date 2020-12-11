<?= $this->extend('Pages/siswa/templatesiswa'); ?>

<?= $this->section('isi'); ?>
<div class="col-md-8 p-5 pt-2">
  <h3><img src="/img/score.png" alt=""><b> Data Nilai/</b> Nilai Pelajaran</h3>
  <hr>
  <!--jangan lupa-->

  <div class="container-fluid" id="profil">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Data Siswa</li>
      </ol>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">No. Induk</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">Data Nilai</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>1234</td>
          <td>Ottoke Samuel</td>
          <td>
            <a href="/Siswa/datanilaimapel" class="badge badge-info">Detail</a>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>1233</td>
          <td>Jacob Thornton</td>
          <td>
            <a href="/Siswa/datanilaimapel" class="badge badge-info">Detail</a>
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>1236</td>
          <td>Larry Bird</td>
          <td>
            <a href="/Siswa/datanilaimapel" class="badge badge-info">Detail</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?= $this->endSection(); ?>