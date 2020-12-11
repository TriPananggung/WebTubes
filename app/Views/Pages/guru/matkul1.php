<?= $this->extend('Pages/Guru/templateguru'); ?>

<?= $this->section('isi'); ?>
<!--Main Menu-->
<!--Isi Kelas-->
<div class="container-fluid kartu">
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card mb-3">
				<div class="card">
					<img class="card-img-top" src="/img/texas.png" alt="Card image cap">
				</div>
			</div>
		</div>

		<div class="col-md-5">
			<div class="card mb-3">
				<div class="card">
					<div class="card-body">
						<a href="#"><i class="fas fa-book"></i> [nama materi 1]</a>
					</div>
				</div>
			</div>
			<div class="card mb-3">
				<div class="card">
					<div class="card-body">
						<a href="#"><i class="fas fa-book"></i> [nama materi 2]</a>
					</div>
				</div>
			</div>
			<div class="card mb-3">
				<div class="card">
					<div class="card-body">
						<a href="#"><i class="fas fa-book"></i> [nama materi 3]</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection(); ?>