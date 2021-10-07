<section class="p-5">
	<div class="container is-flex is-align-items-center is-justify-content-space-between">
		<h4 class="title is-4 mb-0">Edit Pasien</h4>

		<nav class="breadcrumb is-right" aria-label="breadcrumbs">
			<ul>
				<li><a href="#">Bulma</a></li>
				<li><a href="#">Documentation</a></li>
			</ul>
		</nav>
	</div>
</section>

<!-- Form -->
<main class="px-5">
	<div class="container">
		<div class="columns">
			<div class="column is-6">
				<form action="" class="card">
					<div class="card-content">
						<!-- NIK -->
						<div class="field">
							<label class="label">NIK</label>
							<div class="control">
								<input class="input" type="text" name="nik" value="">
							</div>
						</div>
						<!-- Nama -->
						<div class="field">
							<label class="label">Nama</label>
							<div class="control">
								<input class="input" type="text" name="nama" value="">
							</div>
						</div>
						<!-- No. Pasien -->
						<div class="field">
							<label class="label">No. Pasien</label>
							<div class="control">
								<input class="input" type="number" name="number" value="" disabled>
							</div>
						</div>
						<!-- Tanggal Lahir -->
						<div class="field">
							<label class="label">Tanggal Lahir</label>
							<div class="control">
								<input class="input" type="date" name="tgl_lahir" value="">
							</div>
						</div>
						<!-- Jenis Kelamin -->
						<div class="field">
							<label class="label">Jenis Kelamin</label>
							<div class="control">
								<div class="select is-normal">
									<select name="gender">
										<option value="pria">Pria</option>
										<option value="wanita">Wanita</option>
									</select>
								</div>
							</div>
						</div>
						<!-- Telp -->
						<div class="field">
							<label class="label">Telp</label>
							<div class="control">
								<input class="input" type="tel" name="telp" value="">
							</div>
						</div>
						<!-- Alamat -->
						<div class="field">
							<label class="label">Alamat</label>
							<div class="control">
								<input class="input" type="text" name="alamat" value="">
							</div>
						</div>
						<!-- Provinsi -->
						<div class="field">
							<label class="label">Provinsi</label>
							<div class="control">
								<input class="input" type="text" name="provinsi" value="">
							</div>
						</div>
						<!-- Kota/Kabupaten -->
						<div class="field">
							<label class="label">Kota/Kabupaten</label>
							<div class="control">
								<input class="input" type="text" name="kota_kab" value="">
							</div>
						</div>
						<!-- Kecamatan -->
						<div class="field">
							<label class="label">Kecamatan</label>
							<div class="control">
								<input class="input" type="text" name="kecamatan" value="">
							</div>
						</div>
						<!-- Kelurahan -->
						<div class="field">
							<label class="label">Kelurahan</label>
							<div class="control">
								<input class="input" type="text" name="kelurahan" value="">
							</div>
						</div>
						<!-- Button -->
						<div class="field">
							<div class="control">
								<button type="submit" class="button is-primary">Ubah</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>