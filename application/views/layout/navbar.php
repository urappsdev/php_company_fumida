<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-sm navbar-light bg-white">
	<div class="container">
		<a class="navbar-brand" href="#">
			<img src="<?= base_url() ?>assets/img/fumida_logo_navbar.png" alt="Fumida Logo" width="130" height="60" class="img-fluid" />
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url() ?>"><strong>BERANDA</strong></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><strong>TENTANG KAMI</strong></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<strong>LAYANAN KAMI</strong>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">RAYAP</a>
						<a class="dropdown-item" href="#">SERANGGA</a>
						<a class="dropdown-item" href="#">SERANGGA TERBANG</a>
						<a class="dropdown-item" href="#">TIKUS DAN LAINNYA</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">LAYANAN LAINNYA</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('blog') ?>"><strong>BLOG DAN ARTIKEL</strong></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><strong>HUBUNGI KAMI</strong></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><strong>SITEMAP</strong></a>
				</li>
			</ul>
		</div>
	</div>
</nav>
