<section class="p-5">
	<div class="container is-flex is-align-items-center is-justify-content-space-between">
		<h4 class="title is-4 mb-0">Tambah Layanan</h4>
	</div>
</section>

<!-- Form -->
<main class="px-5">
	<div class="container">
		<div class="columns">
			<div class="column is-6">
				<form method="post" class="card" action="<?= base_url('layanan/tambah')?>">
					<div class="card-content">
						<!-- Layanan -->
						<div class="field">
							<label class="label">Nama Layanan</label>
							<div class="control">
								<input class="input" type="text" name="layanan">
							</div>
							<?= form_error('layanan', '<p class="help is-danger">', '</p>'); ?>
						</div>
						<!-- Desk -->
						<div class="field">
							<label class="label">Deskripsi</label>
							<div class="control">
								<input class="input" type="text" name="desk">
							</div>
							<?= form_error('desk', '<p class="help is-danger">', '</p>'); ?>
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
							<?= form_error('status', '<p class="help is-danger">', '</p>'); ?>
						</div>
						<!-- Button -->
						<div class="field">
							<div class="control">
								<button type="submit" class="button is-primary">Tambah</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</main>