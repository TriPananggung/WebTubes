<?= $this->extend('Pages/Admin/templateadmin'); ?>

<?= $this->section('isi'); ?>
<div class="container mt-4">
    <table class="table">
        <h2 style="text-align: center; margin-bottom:20px;">Pesan</h2>
        <thead>
            <tr>
                <?php $angka = 1; ?>
                <th scope="col">No</th>
                <th scope="col">Nama Pengirim</th>
                <th scope="col">Pesan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pesan as $p) : ?>
                <tr>
                    <th scope="row"><?= $angka++; ?></th>
                    <td><?= $p['pengirim']; ?></td>
                    <td><?= $p['pesan']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<?= $this->endSection(); ?>