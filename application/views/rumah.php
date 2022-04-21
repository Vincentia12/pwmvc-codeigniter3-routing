<style>
	@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');


	section {
		padding: 60px 0;
	}

	section .section-title {
		text-align: center;
		margin-bottom: 50px;
		text-transform: uppercase;
	}

	#team .card {
		border: none;
		background: #ffffff;
	}

	.image-flip:hover .backside,
	.image-flip.hover .backside {
		-webkit-transform: rotateY(0deg);
		-moz-transform: rotateY(0deg);
		-o-transform: rotateY(0deg);
		-ms-transform: rotateY(0deg);
		transform: rotateY(0deg);
		border-radius: .25rem;
	}

	.image-flip:hover .frontside,
	.image-flip.hover .frontside {
		-webkit-transform: rotateY(180deg);
		-moz-transform: rotateY(180deg);
		-o-transform: rotateY(180deg);
		transform: rotateY(180deg);
	}

	.mainflip {
		-webkit-transition: 1s;
		-webkit-transform-style: preserve-3d;
		-ms-transition: 1s;
		-moz-transition: 1s;
		-moz-transform: perspective(1000px);
		-moz-transform-style: preserve-3d;
		-ms-transform-style: preserve-3d;
		transition: 1s;
		transform-style: preserve-3d;
		position: relative;
	}

	.frontside {
		position: relative;
		-webkit-transform: rotateY(0deg);
		-ms-transform: rotateY(0deg);
		z-index: 2;
		margin-bottom: 30px;
	}

	.backside {
		position: absolute;
		top: 0;
		left: 0;
		background: white;
		-webkit-transform: rotateY(-180deg);
		-moz-transform: rotateY(-180deg);
		-o-transform: rotateY(-180deg);
		-ms-transform: rotateY(-180deg);
		transform: rotateY(-180deg);
		-webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
		-moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
		box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
	}

	.frontside,
	.backside {
		-webkit-backface-visibility: hidden;
		-moz-backface-visibility: hidden;
		-ms-backface-visibility: hidden;
		backface-visibility: hidden;
		-webkit-transition: 1s;
		-webkit-transform-style: preserve-3d;
		-moz-transition: 1s;
		-moz-transform-style: preserve-3d;
		-o-transition: 1s;
		-o-transform-style: preserve-3d;
		-ms-transition: 1s;
		-ms-transform-style: preserve-3d;
		transition: 1s;
		transform-style: preserve-3d;
	}

	.frontside .card,
	.backside .card {
		min-height: 312px;
	}

	.backside .card a {
		font-size: 18px;
		color: #007b5e !important;
	}

	.frontside .card .card-title,
	.backside .card .card-title {
		color: #007b5e !important;
	}

	.frontside .card .card-body img {
		width: 120px;
		height: 120px;
		border-radius: 50%;
	}

	* {
		font-family: montserrat;
	}

	body {
		background: f1fbff;
	}

	h2 {
		font-weight: 1000;
	}

	.section-padding {
		padding: 100px 0;
	}

	.carousel-item {
		height: 100vh;
		min-height: 300px;
		background-size: cover;
	}

	.carousel-caption {
		bottom: 220px;
		z-index: 2;
	}

	.carousel-caption h5 {
		font-size: 30px;
		text-transform: uppercase;
		letter-spacing: 2px;
		margin-top: 25px;
	}

	.carousel-caption p {
		width: 60%;
		margin: auto;
		font-size: 18px;
		line-height: 1.9;
	}

	.btn-danger {
		border-color: yellow;
		background-color: yellow;
		color: black;
	}

	.carousel-inner::before {
		content: '';
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		background: rgba(0, 0, 0, 0.7);
		z-index: 1;
	}

	.w-100 {
		height: 100vh;
	}

	* {
		font-family: montserrat;
	}

	.navbar-nav a {
		font-size: 15px;
		text-transform: uppercase;
		font-weight: 500;
	}

	.navbar-light .navbar-brand {
		color: #000;
		font-size: 20px;
		text-transform: uppercase;
		font-weight: 700;
		letter-spacing: 2;
	}

	.navbar-light .navbar-brand:focus,
	.navbar-light .navbar-brand:hover {
		color: #000;
	}

	.navbar-light .navbar-nav .navbar-link {
		color: #000;

	}



	.layanan .card-body i {
		font-size: 40px;
	}

	.layanan .card {
		margin-bottom: 30px;
	}

	@media only screen and (max-width: 767px) {
		.navbar-nav {
			text-align: center;
		}
	}

	@media only screen and (max-width: 767px) {
		.carousel-caption {
			bottom: 125px;
		}

		.carousel-caption h5 {
			font-size: 17px;
		}

		.carousel-caption a {
			padding: 10px 15px;
		}

		.carousel-caption p {
			width: 100%;
			line-height: 1.6;
			font-size: 12px;
		}
	}
</style>

<!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="<?= base_url('img/gambar.png'); ?>" class="d-block w-100" alt="...">
			<div class="carousel-caption">
				<h5>Selamat Datang di</h5>
				<h5>Layanan Electronic Health</h5>
				<p>Rumah Sakit Sumber Kasih</p>
				<p>(021) - 7530416 | (021) - 8010004</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="<?= base_url('img/gambar3.png'); ?>" class="d-block w-100" alt="...">
			<div class="carousel-caption">
				<h5>Informasi</h5>
				<h5>Ketersediaan Kamar</h5>
				<p>Rumah Sakit Sumber Kasih</p>
				<p><a href="layanan/ketersediaan" class="btn btn-danger px-4 mt-4 mr-3">CEK KETERSEDIAAN<i class="bi bi-arrow-right-short"></i></a></p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="<?= base_url('img/gambar2.png'); ?>" class="d-block w-100" alt="...">
			<div class="carousel-caption">
				<h5>Halaman</h5>
				<h5>Layanan Tersedia</h5>
				<p>Rumah Sakit Sumber Kasih</p>
				<p><a href="#layanan" class="btn btn-danger px-4 mt-4 mr-3">Read More<i class="bi bi-arrow-right-short"></i></a></p>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</div>
<!-- Akhir Carousel -->

<!-- About Us -->
<section id="about" class="about-section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-12 col-12">
				<br>
				<br>
				<br>
				<br>
				<div class="about-img">
					<img src="<?= base_url('img/gambar.png'); ?>" alt="aboutUs" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
				<div class="about-text">
					<h2 class="position-relative d-inline-block"><span class="text-warning">About</span> Us <br></h2>
					<br>
					<br>
					<p class="lead text-muted">Rumah Sakit Sumber Kasih</p>
					<p>Rumah Sakit Sumber Kasih senantiasa bekerja keras untuk menjadi pilihan pertama bagi individu yang membutuhkan pelayanan kesehatan, sumber daya manusia yang tulus memberikan sumbangsih di bidang kesehatan, didukung shareholders yang peduli terhadap sesama lingkungan. Kepedulian terhadap pentingnya lingkungan bagi kehidupan mendorong Rumah Sakit Sumber Kasih berkomitmen menjadi rumah sakit ramah lingkungan. Inovasi ini diwujudkan dalam arsitektur gedung yang sustainable, sarana dan prasarana yang eco friendly, serta edukasi sumber daya manusia yang terpadu.</p>
					<a href="#" class="btn btn-warning">Learn More<i class="bi bi-arrow-right-short"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Akhir About Us -->

<!-- informasi -->
<section id="blogs" class="py-5">
	<div class="container">
		<div class="title text-center py-5">
			<h2><span class="text-warning">Pusat</span> Informasi</h2>
		</div>

		<div class="row g-3">
			<div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
				<img src="<?= base_url('img/berita1.png'); ?>" alt="">
				<div class="card-body px-0">
					<h4 class="card-title">Sumber Kasih Hadirkan Layanan<br>Pelanggan</h4>
					<p class="card-text mt-3 text-muted" style="font-size: 20px;">Pasien merupakan aset penting dalam mendirikan rumah sakit. Service Excellence merupakan salah satu faktor terpenting bagi pasien sehingga setiap pasien akan mendapatkan pelayanan yang terbaik sesuai dengan yang dibutuhkan.
						<br>
						Kami ingin meningkatkan layanan kami melalui Layanan Pelanggan. Dengan Customer Care, pelanggan dapat lebih mudah mendapatkan layanan 'tindak lanjut' yang baik.
						<br>
						Hari ini, Customer Care telah diresmikan dan selalu memenuhi Pelayanan Prima bagi pasien Rumah Sakit Sumber Kasih.
					</p>
				</div>
			</div>

			<div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
				<img src="<?= base_url('img/berita2.png'); ?>" alt="">
				<div class="card-body px-0">
					<h4 class="card-title">Buka Puasa Bersama Karyawan Sumber Kasih</h4>
					<p class="card-text mt-3 text-muted" style="font-size: 20px;">
						Dalam rangka menyambut Bulan Suci Ramadhan, perlu adanya kegiatan yang memberikan momentum dan pembelajaran untuk dapat menyambut Ramadhan dengan kegiatan yang bermakna dan positif sebagai wujud rasa syukur.
						<br>
						Oleh karena itu untuk berbagi kebahagiaan dengan sesama karyawan dan pelanggan Rumah Sakit Sumber Kasih
						<br>
						Rumah Sumber Kasih kemarin menggelar buka puasa bersama di area outdoor rumah sakit.
					</p>
				</div>
			</div>

			<div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3">
				<img src="<?= base_url('img/berita3.png'); ?>" alt="">
				<div class="card-body px-0">
					<h4 class="card-title">Tes Covid-19 Turun, Fokus pada Tes Antibodi dan Booster</h4>
					<p class="card-text mt-3 text-muted" style="font-size: 20px;"><b>JAWAPOS -</b> Keputusan pembatalan tes Covid-19 sebagai syarat perjalanan berdampak pada klinik dan rumah sakit. Pengumuman dari Kementerian Perhubungan (Kemenhub) menyebutkan bahwa pemudik dalam negeri (PPDN) tidak perlu menyertakan bukti negatif tes PCR atau antigen. Permintaan tes PCR dan antigen jelas menurun, meski tidak 100 persen.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Akhir Informasi -->

<!-- Section Layanan Tersedia -->
<br>
<section id="layanan" class="layanan section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-header text-center pb-5">
					<h2><span class="text-warning">Layanan</span> Tersedia</h2>
					<p>Berikut beberapa layanan yang akan dan kami sediakan agar masyarakat lebih mudah dan nyaman dalam berobat</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12 col-md-12 col-lg-4">
				<div class="card shadow text-white text-center bg-dark pb-2" style="border-radius: 30px;">
					<div class="card-body">
						<i class="bi bi-subtract"></i>
						<h3 class="card-title">Ketersediaan Kamar</h3>
						<p class="lead">Saat ini kami sudah menyediakan layanan Informasi Ketersediaan Tempat Tidur Online agar masyarakat dapat mengecek Ketersediaan Kamar pada RS Sumber Kasih Secara Real Time dimanapun dan kapanpun.</p>
						<a href="layanan/ketersediaan" class="btn btn-danger text-dark">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-12 col-lg-4">
				<div class="card shadow text-white text-center bg-dark pb-2" style="border-radius: 30px;">
					<div class="card-body">
						<i class="bi bi-subtract"></i>
						<h3 class="card-title">Konsultasi online</h3>
						<p class="lead">Kami akan menyediakan layanan Konsultasi Online untuk memudahkan pasien melakukan konsultasi kesehatan dimanapun pasien berada, tanpa harus datang jauh - jauh ke rumah sakit unutk melakukan konsultas kesehatan.</p>
						<a href="layanan/konsultasi" class="btn btn-warning text-dark">COMING SOON</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-12 col-lg-4">
				<div class="card shadow text-white text-center bg-dark pb-2" style="border-radius: 30px;">
					<div class="card-body">
						<i class="bi bi-subtract"></i>
						<h3 class="card-title">Pendaftaran Online</h3>
						<p class="lead">Kami akan menyediakan layanan pendaftaran online untuk memudahkan pasien melakukan pendaftaran dan mencegah Antrian panjang yang mengakibatkan pasien menunggu lama untuk mendapatkan pelayanan.</p>
						<a href="layanan/daftaronline" class="btn btn-warning text-dark">COMING SOON</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Akhir Section Layanan Tersedia -->


<!-- Section Dokter -->
<section id="team" class="pb-5">
	<div class="container">
		<h2 class="text-center"><span class="text-warning">Dokter</span> Spesialis</h2>
		<br>
		<br>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="image-flip">
					<div class="mainflip flip-0">
						<div class="frontside">
							<div class="card shadow">
								<div class="card-body text-center">
									<p><img class=" img-fluid" src="<?= base_url('img/dokter8.png'); ?>" alt="card image"></p>
									<h4 class="card-title fw-bold">Dr. Cicilia Indri E</h4>
									<p class="card-text">Spesialis Penyakit Dalam</p>
								</div>
							</div>
						</div>
						<div class="backside">
							<div class="card shadow">
								<div class="card-body text-center mt-4">
									<h4 class="card-title">Dr. Cicilia Indri E</h4>
									<p class="card-text">Dr. Cicilia Indri Elawati merupakan salah satu lulusan terbaik di Universitas Bangsa. Spesialis Penyakit Dalam FKUI/RSCM. Motto : Play Hard, Work Hard</p>
									<ul class="list-inline">
										<li class="list-inline-item">
											<a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
												<i class="fa fa-facebook"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
												<i class="fa fa-twitter"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
												<i class="fa fa-skype"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
												<i class="fa fa-google"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
					<div class="mainflip">
						<div class="frontside">
							<div class="card shadow">
								<div class="card-body text-center">
									<p><img class=" img-fluid" src="<?= base_url('img/dokter9.jpg'); ?>" alt="card image"></p>
									<h4 class="card-title fw-bold">Dr. Rumiyati</h4>
									<p class="card-text">Spesialis Bedah</p>
								</div>
							</div>
						</div>
						<div class="backside">
							<div class="card">
								<div class="card-body text-center mt-4">
									<h4 class="card-title">Dr. Rumiyati</h4>
									<p class="card-text">Dr. Rumiyati merupakan salah satu lulusan terbaik di Universitas Jaya. Spesialis Bedah. Motto : Kerja keras, Bersyukur dan Berbahagia</p>
									<ul class="list-inline">
										<li class="list-inline-item">
											<a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
												<i class="fa fa-facebook"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
												<i class="fa fa-twitter"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
												<i class="fa fa-skype"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
												<i class="fa fa-google"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
					<div class="mainflip">
						<div class="frontside">
							<div class="card shadow">
								<div class="card-body text-center">
									<p><img class=" img-fluid" src="<?= base_url('img/dokter10.png'); ?>"></p>
									<h4 class="card-title fw-bold">Dr. Djamillah</h4>
									<p class="card-text">Spesialis Kulit dan Kelamin</p>
								</div>
							</div>
						</div>
						<div class="backside">
							<div class="card">
								<div class="card-body text-center mt-4">
									<h4 class="card-title">DR. Djamillah</h4>
									<p class="card-text">Dr. Djamillah merupakan salah satu lulusan terbaik di Universitas Herlangga. SpesialisKulit dan Kelamin. Motto : To Love, To Care, To Share</p>
									<ul class="list-inline">
										<li class="list-inline-item">
											<a class="social-icon text-xs-center" target="_blank" href=" ">
												<i class="fa fa-facebook"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a class="social-icon text-xs-center" target="_blank" href=" ">
												<i class="fa fa-twitter"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a class="social-icon text-xs-center" target="_blank" href=" ">
												<i class="fa fa-skype"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a class="social-icon text-xs-center" target="_blank" href=" ">
												<i class="fa fa-google"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- /Dokter -->