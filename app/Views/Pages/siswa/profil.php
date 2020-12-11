<?= $this->extend('Pages/Siswa/templatesiswa'); ?>

<?= $this->section('isi'); ?>
<div class="col-md-10 p-5 pt-2">
    <h3><i class="far fa fa-user-o"></i><b> Profile/</b>Data Diri</h3>
    <hr>
    <!--jangan lupa-->

    <div class="container-fluid" id="profil">

        <div class="row">
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="/Img/adi.jpeg" class="card-img-center" alt="nama foto" width="140px" height="200px">
                    </div>
                    <div class="card-body text-left">
                        <form>
                            <table align="center">
                                <tr>
                                    <td width="100" id="nama"><b>Nama</b></td>
                                    <td width="10"><b>: </b></td>
                                    <td width="250" id="nama"><b>Khurin Nabila</b></td>
                                </tr>
                                <tr>
                                    <td width="100" id="kelas"><b>Kelas</b></td>
                                    <td width="10"><b>: </b></td>
                                    <td width="250" id="kelas"><b> S1 Teknik Informatikav</td>
                                </tr>
                                <tr>
                                    <td width="100" id="noind"><b>NIS</b></td>
                                    <td width="10"><b>: </b></td>
                                    <td width="250" id="noind"><b> 190535646094</b></td>
                                </tr>
                                <tr>
                                    <td width="100" id="alamat"><b>Alamat</b></td>
                                    <td width="10"><b>: </b></td>
                                    <td width="250" id="alamat"><b>Desa Macanbang Kecamatan Gondang Kabupaten Tulungagung</b></td>
                                </tr>
                                <tr>
                                    <td><b></b></td>
                                    <td><b></b></td>
                            </table>
                        </form>
                    </div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                        Ubah Data Profil
                    </button>
                </div>
            </div>
        </div>

        <br>



        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Ubah Data Profil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="profil.php" method="post">
                            <div class="form-group form-group-sm">
                                <label for="inputAddress">Nama</label>
                                <input name="nama" type="text" class="form-control" id="inputAddress" placeholder="Nama ...">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Kelas</label>
                                <input name="kelas" type="text" class="form-control" id="inputAddress" placeholder="Kelas ...">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">No. Induk Siswa</label>
                                <input name="noink" type="text" class="form-control" id="inputAddress" placeholder="No. Induk ...">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Alamat</label>
                                <input name="alamat" type="text" class="form-control" id="inputAddress" placeholder="Alamat...">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<?= $this->endSection(); ?>