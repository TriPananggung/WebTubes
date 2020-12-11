<?= $this->extend('Pages/Siswa/templatesiswa'); ?>

<?= $this->section('isi'); ?>
<div class="col-md-8 p-5 pt-2">
    <h3><img src="/img/bell.png" alt=""><b> Notification/</b>Pemberitahuan</h3>
    <hr>
    <!--jangan lupa-->

    <div class="container-fluid" id="profil">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tugas Mata Pelajaran</h5>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="mapeltampil.html">Mata Pelajaran</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tugas atau Evaluasi</li>
                            </ol>
                        </nav>
                        <p class="card-text">Deskripsi Mata Pelajaran, catatan Mata Pelajaran, informasi terbaru tentang Mata Pelajaran, tugas terbaru, dsb.</p>
                        <a href="/siswa/mapeltampil" class="card-link">Pelajari</a>
                    </div>
                </div>
            </div>
        </div></br>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Absensi Siswa</h5>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="absensi.html">Absensi </a></li>
                                <li class="breadcrumb-item active" aria-current="page">Mata Pelajaran</li>
                            </ol>
                        </nav>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="/siswa/absensi" class="card-link">Pelajari</a>
                    </div>
                </div>
            </div>
        </div></br>

    </div>
</div>
<?= $this->endSection(); ?>