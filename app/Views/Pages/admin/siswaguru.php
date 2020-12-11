<?= $this->extend('Pages/Admin/templateadmin'); ?>

<?= $this->section('isi'); ?>

<div class="container-fluid">
    <h1 style="color:black;">SISWA</h1>
    <div class="row">
        <div class="col-5 my-3 ml-5" style="display:flex;">
            <input class=" form-control mr-sm-2" type="search" placeholder="Cari Siswa" aria-label="Search" style="border:1px solid rgb(30, 13, 128)">
            <button class="btn btn-outline my-2 my-sm-0" type="submit" style="color:white; font-weight:bold; background-color:rgb(255, 190, 136);">Cari</button>
        </div>
        <a href="/admin/create" class="btn btn-success" style="height: 40px; margin-top:15px;">Tambah Data Siswa</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-10">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <?php $angka = 1; ?>
                <?php foreach ($siswa as $s) : ?>
                    <tbody>
                        <tr>
                            <th scope="row" style="vertical-align: middle;"><?= $angka++; ?></th>
                            <td><img src="/img/<?= $s['foto']; ?>" style="width:100px;"></td>
                            <td style="vertical-align: middle;"><?= $s['nama']; ?></td>
                            <td style="vertical-align: middle;"><?= $s['kelas']; ?></td>
                            <td><a style="vertical-align: middle; margin-top:22px; width:100px; border-radius:30px; height:30px;" class="btn  btn-info btn-sm" href="/adminsiswa/<?= $s['slug']; ?>">Detail</a> </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
            </table>
        </div>
    </div>


    <!-- GURU -->
    <h1 style="color:black;">GURU</h1>
    <div class="row">
        <div class="col-5 my-3 ml-5" style="display:flex;">
            <input class="form-control mr-sm-2" type="search" placeholder="Cari Guru" aria-label="Search" style="border:1px solid rgb(30, 13, 128)">
            <button class="btn btn-outline my-2 my-sm-0" type="submit" style="color:white; font-weight:bold; background-color:rgb(255, 190, 136);">Cari</button>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-10">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <?php $angka = 1; ?>
                <?php foreach ($guru as $g) : ?>
                    <tbody>
                        <tr>
                            <th scope="row" style="vertical-align: middle;"><?= $angka++; ?></th>
                            <td><img src="/img/<?= $g['foto']; ?>" style="width:100px;"></td>
                            <td style="vertical-align: middle;"><?= $g['nama']; ?></td>
                            <td style="vertical-align: middle;"><?= $g['jabatan']; ?></td>
                            <td></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
            </table>
        </div>
    </div>


</div>

<?= $this->endSection(); ?>