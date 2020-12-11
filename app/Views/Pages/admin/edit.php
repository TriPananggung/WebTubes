<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/cssadmin/tambahsiswa.css">
</head>

<body> -->
<?= $this->extend('Pages/Admin/templateadmin'); ?>
<?= $this->section('isi'); ?>

<div class="container bg-light">
    <h1>Edit Data Siswa</h1>
    <form action="/pages/save" method="post">
        <?= csrf_field(); ?>

        <input type="text" placeholder="Nis" name="nis" required autofocus>

        <input type="text" placeholder="Nama" name="nama">

        <input type="text" placeholder="kelas" name="kelas">

        <input type="text" placeholder="Organisasi" name="organisasi">
        <input type="text" placeholder="No Telp" name="no_telp">
        <input type="text" placeholder="Alamat" name="alamat">

        <label class="jkjk">Jenis Kelamin :</label>
        <div class="cowok">
            <input type="radio" id="pria" name="jk" value="Laki-Laki">
            <label for="pria">
                <h2>Laki-Laki</h2>
            </label>
            <input type="radio" id="wanita" name="jk" value="Perempuan">
            <label for="wanita">
                <h2>Perempuan</h2>
            </label>
        </div>

        <div class="file">
            <label for="file">Foto :</label>
            <input type="file" name="foto" id="file">
        </div>

        <button type="submit">Ubah Data</button>
    </form>
</div>
<?= $this->endSection(); ?>