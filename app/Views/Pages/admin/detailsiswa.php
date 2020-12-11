<?= $this->extend('Pages/Admin/templateadmin'); ?>

<?= $this->section('isi'); ?>

<div class="container">
    <div class="row" style="padding-top:50px;">

        <div class="card bg-light" style="width: 50rem; margin:auto; padding:20px; box-sizing:border-box;">
            <h4 class="card-title my-2" style="margin:auto;"><?= $siswa['nama']; ?></h4>
            <img class="card-img-top" src="/img/<?= $siswa['foto']; ?>" alt="Card image cap" style="width: 50%; margin:auto;">

            <div class="card-body bg-light">

                <div class="row">
                    <div class="col-3">
                        <h5>NIS</h5>
                    </div>
                    <div class="col-1">
                        <p style="font-weight: bold;">:</p>
                    </div>
                    <div class="col-8">
                        <p><?= $siswa['nis']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <h5>Kelas</h5>
                    </div>
                    <div class="col-1">
                        <p style="font-weight: bold;">:</p>
                    </div>
                    <div class="col-8">
                        <p><?= $siswa['kelas']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <h5>Jenis Kelamin</h5>
                    </div>
                    <div class="col-1">
                        <p style="font-weight: bold;">:</p>
                    </div>
                    <div class="col-8">
                        <p><?= $siswa['jenis_kelamin']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <h5>No Telepon</h5>
                    </div>
                    <div class="col-1">
                        <p style="font-weight: bold;">:</p>
                    </div>
                    <div class="col-8">
                        <p><?= $siswa['no_telp']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <h5>Organisasi</h5>
                    </div>
                    <div class="col-1">
                        <p style="font-weight: bold;">:</p>
                    </div>
                    <div class="col-8">
                        <p><?= $siswa['organisasi']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <h5>Alamat</h5>
                    </div>
                    <div class="col-1">
                        <p style="font-weight: bold;">:</p>
                    </div>
                    <div class="col-8">
                        <p><?= $siswa['alamat']; ?></p>
                    </div>
                </div>
                <div>
                    <a href="/admin/edit/<?= $siswa['slug']; ?>" class="btn btn-info" style="margin-left:220px; border-radius:30px; width:130px;">Edit</a>
                    <a href="/admin/delete/<?= $siswa['nis']; ?>" class="btn btn-danger" style="border-radius:30px; width:130px;" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a>
                </div>
                <a href="/admin/siswaguru">Kembali Ke Halaman Siswa</a>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>