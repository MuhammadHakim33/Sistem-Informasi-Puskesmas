<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
	<div class="container">
		<div class="navbar-brand">
			<a class="navbar-item" href="<?= base_url('admin') ?>"><strong>ADMIN</strong></a>

			<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
				data-target="navbarBasicExample">
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
			</a>
		</div>

		<div id="navbarBasicExample" class="navbar-menu">
			<div class="navbar-start">
				<a class="navbar-item" href="<?= base_url('admin') ?>">Dashboard</a>
				<a class="navbar-item" href="<?= base_url('pasienlist') ?>">Pasien</a>
				<a class="navbar-item" href="<?= base_url('dokterlist') ?>">Dokter</a>
				<a class="navbar-item" href="<?= base_url('adminkontak') ?>">Kontak</a>
				<a class="navbar-item" href="<?= base_url('layanan') ?>">Layanan</a>
			</div>

			<div class="navbar-end">
				<div class="navbar-item">
					<div class="buttons are-small">
						<a class="button is-danger is-light" href="<?= base_url('adminlogin/logout') ?>">
							<span class="icon">
								<i class="ri-logout-box-r-line"></i>
							</span>
							<span>Logout</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>