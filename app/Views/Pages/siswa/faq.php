<?= $this->extend('Pages/Siswa/templatesiswa'); ?>

<?= $this->section('isi'); ?>
<div class="col-md-8 p-5 pt-2">
    <h3><img src="/img/problem.png" alt=""><b> FAQ (Frequently Asked Questions)/</b> Pertanyaan Umum</h3>
    <hr>
    <!--jangan lupa-->

    <div class="container-fluid" id="profil">

        <div class="card border-info style=border:5px">
            <div class="card-body">
                <h6 class="card-title">Pertanyaan</h6>
                <p class="card-text">Penjelasan Penjelasan Penjelasan Penjelasan Penjelasan Penjelasan Penjelasan Penjelasan.</p></br>
                <h6 class="card-title">Pertanyaan</h6>
                <p class="card-text">Penjelasan Penjelasan Penjelasan Penjelasan Penjelasan Penjelasan Penjelasan Penjelasan.</p></br>
                <h6 class="card-title">Apakah anda masih bingung ? Hubungi admin kami : </h6>
                <table>
                    <tr>
                        <td width="30"><a href="#" class="fa fa-envelope"></a></td>
                        <td width="150">Email</td>
                        <td width="20"> :</td>
                        <td><a href="#">namawebsite.@gmail.com</a></td>
                    </tr>
                    <tr>
                        <td width="30"><a href="#" class="fa fa-phone"></a></td>
                        <td width="150">Telfon</td>
                        <td width="20"> :</td>
                        <td><a href="#">123456789101</a></td>
                    </tr>
                    <tr>
                        <td width="30"><a href="#" class="fa fa-phone-square"></a></td>
                        <td width="150">Pelayanan Online</td>
                        <td width="20"> :</td>
                        <td><a href="#">0856 0778 2027 (Admin)</a></td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection(); ?>