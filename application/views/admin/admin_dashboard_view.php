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
				<a class="navbar-item">Dashboard</a>
				<a class="navbar-item">Pasien</a>
				<a class="navbar-item">Dokter</a>
				<a class="navbar-item">Kontak</a>
			</div>

			<div class="navbar-end">
				<div class="navbar-item">
					<div class="buttons are-small">
						<a class="button is-danger is-light">
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

<section class="p-5">
	<div class="container is-flex is-align-items-center is-justify-content-space-between">
		<h4 class="title is-4 mb-0">Dashboard</h4>
	</div>
</section>

<main class="px-5">
	<div class="container">
		<!-- Summary -->
		<div class="summary columns">
			<!-- Pendaftran -->
			<div class="column is-4">
				<div class="box is-flex is-justify-content-space-between is-align-items-center">
					<span class="text ">
						<p class="is-size-3 has-text-weight-bold">10</p>
						<p>Pendaftran Hari Ini</p>
					</span>
					<i class="ri-dossier-line ri-3x"></i>
				</div>
			</div>
			<!-- Pasien Baru -->
			<div class="column is-4">
				<div class="box is-flex is-justify-content-space-between is-align-items-center">
					<span class="text ">
						<p class="is-size-3 has-text-weight-bold">10</p>
						<p>Pasien Baru</p>
					</span>
					<i class="ri-user-add-line ri-3x"></i>
				</div>
			</div>
			<!-- Total Pasien -->
			<div class="column is-4">
				<div class="box is-flex is-justify-content-space-between is-align-items-center">
					<span class="text ">
						<p class="is-size-3 has-text-weight-bold">10</p>
						<p>Total Pasien</p>
					</span>
					<i class="ri-user-3-line ri-3x"></i>
				</div>
			</div>
		</div>
		<!-- Table -->
		<div class="table-container mt-5">
			<h4 class="title is-4">List Pendaftran</h4>
			<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
				<thead>
					<tr>
						<th><abbr title="Nomor Induk Kependudukan">NIK</abbr></th>
						<th>Kode Booking</th>
						<th>Nama</th>
						<th>Jenis Layanan</th>
						<th>No Antri</th>
						<th>Tanggal Kunjungan</th>
						<th>Tanggal Booking</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>0102311231</td>
						<td>8821</td>
						<td>Wahyu Saputra</td>
						<td>Umum</td>
						<td>1</td>
						<td>2021-09-10</td>
						<td>2021-09-10</td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>
</main>