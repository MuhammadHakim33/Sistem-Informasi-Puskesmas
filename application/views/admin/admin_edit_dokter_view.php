<section class="p-5">
	<div class="container is-flex is-align-items-center is-justify-content-space-between">
		<h4 class="title is-4 mb-0">Edit Dokter</h4>

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
				<form method="post" class="card" action="<?= base_url('dokterlist/edit') ?>" enctype="multipart/form-data">
					<div class="card-content">
						<!-- iD Hidden -->
						<div class="field is-hidden">
							<label class="label">Nama</label>
							<div class="control">
								<input class="input" type="text" name="id" value="<?= $dokter[0]["id"] ?>">
							</div>
						</div>
						<!-- Nama -->
						<div class="field">
							<label class="label">Nama</label>
							<div class="control">
								<input class="input" type="text" name="nama" value="<?= $dokter[0]["nama"] ?>">
							</div>
						</div>
						<!-- Telp -->
						<div class="field">
							<label class="label">Telp</label>
							<div class="control">
								<input class="input" type="tel" name="telp" value="<?= $dokter[0]["telp"] ?>">
							</div>
						</div>
						<!-- Desk -->
						<div class="field">
							<label class="label">Deskripsi</label>
							<div class="control">
								<input class="input" type="text" name="desk" value="<?= $dokter[0]["deskripsi"] ?>">
							</div>
						</div>
						<!-- Status -->
						<div class="field">
							<label class="label">Status</label>
							<div class="control">
								<div class="select is-normal">
									<select name="status">
										<option value="1">Aktif</option>
										<option value="0">Non-aktif</option>
									</select>
								</div>
							</div>
						</div>
						<!-- Foto -->
						<div class="field">
							<label class="label">Foto</label>
							<div class="control">
								<div class="file">
									<label class="file-label">
										<input class="file-input" type="file" name="foto" size="20">
										<span class="file-cta">
											<span class="file-icon">
												<i class="ri-upload-cloud-2-line ri-lg"></i>
											</span>
											<span class="file-label">
												Choose a file… 
											</span>
										</span>
									</label>
								</div>
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