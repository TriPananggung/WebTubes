<?= $this->extend('Pages/Guru/templateguru'); ?>

<?= $this->section('isi'); ?>
<!--Isi Kelas-->
<div class="container">
	<div class="row">
		<table class="table" style="margin-top: 70px; ">
			<thead class="thead-dark">
				<tr>
					<th scope="col">No</th>
					<th scope="col">Nama</th>
					<th scope="col">Keterangan</th>
					<th scope="col">Detil Siswa</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Adi Pramono</td>
					<td>Ketua Kelas</td>
					<td><a href="" class="btn-info" style="font-weight: bold; padding:3px; border-radius:4px;">Lihat Siswa</a></td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Tri Pananggung</td>
					<td>Wakil Ketua</td>
					<td><a href="" class="btn-info" style="font-weight: bold; padding:3px;border-radius:4px;">Lihat Siswa</a></td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>Kurin Nabila</td>
					<td>Bendahara</td>
					<td><a href="" class="btn-info" style="font-weight: bold; padding:3px;border-radius:4px;">Lihat Siswa</a></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<?= $this->endSection(); ?>