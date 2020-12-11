<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
	<script src="https://kit.fontawesome.com/91e0a5b445.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="/css/cssguru.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<title>Guru</title>
	<style>
		.guruku {
			width: 50px;
			height: 50px;
			border-radius: 50%;
		}

		.nav-item img,
		h3 img {
			width: 30px;
		}
	</style>
</head>

<body>
	<!--Navigator-->
	<nav class="navbar navbar-expand-lg navbar-light" id="navbarr" style="background-color: rgb(255, 190, 136) ; top:0; height:80px; ">
		<!-- <i class="fas fa-portrait"></i> -->
		<img src="/Img/adi.jpeg" alt="" class="guruku">
		<a class="navbar-brand" href="#"> Guru Adi</a>
		<button class="navbar-toggler bg-primary" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link text-blue text-white" href="#" style=""><img src="/img/open-book.png" alt=""></i> Bahasa Indonesia X-IPS<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="#"><img src="/img/open-book.png" alt=""></i> Bahasa Indonesia XI-IPA</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="#"><img src="/img/open-book.png" alt=""></i> Bahasa Indonesia XII-IPA</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="#"><img src="/img/settings.png" alt=""> Setting</a>
				</li>
			</ul>
		</div>
	</nav>

	<!--Main Menu-->

	<!--Isi Kelas-->
	<div class="container-fluid kartu" style="margin-top:130px;">
		<h5 style="border-bottom:2px solid rgb(56,25,162); width:180px; margin-bottom:20px;">List Mata Pelajaran</h5>
		<div class="row">

			<div class="col-md-4">
				<div class="card mb-3">
					<a href="/Guru/matkul"><img class="card-img-top" src="img/texas.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">[nama matkul]</h5>
					</a>
					<p class="card-text">[definisi matkul]</p>
					<p class="card-text"><small class="text-muted">[waktu matkul terakhir diperbaharui]</small></p>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card mb-3">
				<a href="#"><img class="card-img-top" src="img/chen.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">[nama matkul]</h5>
				</a>
				<p class="card-text">[definisi matkul]</p>
				<p class="card-text"><small class="text-muted">[waktu matkul terakhir diperbaharui]</small></p>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card mb-3">
			<a href=""><img class="card-img-top" src="img/skyfire.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">[nama matkul]</h5>
			</a>
			<p class="card-text">[definisi matkul]</p>
			<p class="card-text"><small class="text-muted">[waktu matkul terakhir diperbaharui]</small></p>
		</div>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Masukkan Gambar Baru</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label for="exampleFormControlFile1">Pilih gambar baru</label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1">
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Simpan Perubahan</button>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>