<?= $this->extend('pages/siswa/templatesiswa'); ?>

<?= $this->section('isi') ?>

<div class="col-md-10 p-5 pt-2">
    <h3><img src="/img/customer-review.png" alt=""><b> Presensi/</b>Kehadiran</h3>
    <hr>
    <!--jangan lupa-->

    <div class="container-fluid" class="formabsensi" id="profil">
        <div class="row">
            <div class="col-sm-6">
                <div class="card text-center" id="kolomabsensi">
                    <div class="card-body">
                        <h5 class="card-title">Mata Pelajaran Matematika</h5>
                        <p class="card-text">Pertemuan ke 1 Nama Bab</p>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                            Konfirmasi
                        </button>
                    </div>
                </div>
            </div>

            <br><br>

            <div class="col-sm-6">
                <div class="card text-center ">
                    <div class="card-body">
                        <h5 class="card-title">Mata Pelajaran Bahasa Inggris</h5>
                        <p class="card-text">Pertemuan ke 2 Nama Bab</p>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                            Konfirmasi
                        </button>
                    </div>
                </div>
            </div>
        </div></br>

        <div class="row">
            <div class="col-sm-6">
                <div class="card text-center " id="kolomabsensi">
                    <div class="card-body">
                        <h5 class="card-title">Mata Pelajaran PKN</h5>
                        <p class="card-text">Pertemuan ke 3 Nama Bab</p>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                            Konfirmasi
                        </button>
                    </div>
                </div>
            </div>

            <br><br>

            <div class="col-sm-6">
                <div class="card text-center " class="kolomabsensi">
                    <div class="card-body">
                        <h5 class="card-title">Mata Pelajaran TIK</h5>
                        <p class="card-text">Pertemuan ke 4 Nama Bab</p>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                            Konfirmasi
                        </button>
                    </div>
                </div>
            </div>
        </div></br>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Daftar Kehadiran Siswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('Pages/saveabsensi'); ?>" method="POST">
                        <div class="modal-body">
                            <input type="text" name="username" value="<?= user()->username; ?>" style="opacity:0; z-index:-2; width:0; height:0;"> <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="keterangan" id="inlineRadio1" value="hadir">
                                <label class="form-check-label" for="inlineRadio1"> Hadir </label>
                            </div><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="keterangan" id="inlineRadio2" value="izin">
                                <label class="form-check-label" for="inlineRadio2"> Izin </label>
                            </div><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="keterangan" id="inlineRadio3" value="sakit">
                                <label class="form-check-label" for="inlineRadio3"> Sakit </label>
                            </div><br>
                            <br>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Upload Surat Izin</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="surat">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"> Kembali</button>
                            <button type="submit" class="btn btn-primary"> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>