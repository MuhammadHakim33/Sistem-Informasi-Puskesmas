<section class="p-5">
	<div class="container is-flex is-align-items-center is-justify-content-space-between">
		<h4 class="title is-4 mb-0">Edit Layanan</h4>
	</div>
</section>

<!-- Form -->
<main class="px-5">
	<div class="container">
		<div class="columns">
			<div class="column is-6">
				<form method="post" class="card" action="<?= base_url('layanan/edit') ?>">
					<div class="card-content">
						<!-- iD Hidden -->
						<div class="field is-hidden">
							<label class="label">id</label>
							<div class="control">
								<input class="input" type="text" name="id" value="<?= $layanan[0]["id"] ?>">
							</div>
						</div>
						<!-- Nama -->
						<div class="field">
							<label class="label">Nama Layanan</label>
							<div class="control">
								<input class="input" type="text" name="layanan" value="<?= $layanan[0]["nama_layanan"] ?>">
							</div>
						</div>
						<!-- Desk -->
						<div class="field">
							<label class="label">Deskripsi</label>
							<div class="control">
								<input class="input" type="text" name="desk" value="<?= $layanan[0]["keterangan"] ?>">
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