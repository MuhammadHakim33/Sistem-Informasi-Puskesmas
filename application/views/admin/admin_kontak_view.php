<section class="p-5">
	<div class="container is-flex is-align-items-center is-justify-content-space-between">
		<h4 class="title is-4 mb-0">Kontak</h4>
	</div>
</section>

<?php if($this->session->flashdata('pesan')) : ?>
    <div class="container notification is-success is-light">
    <a class="delete" href="<?= base_url('adminkontak/hapusnotif')?>"></a>
        Kontak <?= $this->session->flashdata('pesan') ?>
    </div>
<?php endif; ?>

<main class="px-5">
	<div class="container">
		<div class="columns">
			<!-- Kontak Admin -->
			<div class="column is-6">
				<!-- Form -->
				<form class="card" method="POST" action="<?= base_url('adminkontak/ubahkontakwa') ?>">
					<!-- Title -->
					<div class="card-header">
						<p class="card-header-title">Kontak Whatsapp Admin</p>
					</div>
					<!-- Input -->
					<div class="card-content">
						<div class="content">
							<div class="field">
								<label class="label">No Telp</label>
								<div class="control">
									<input class="input" type="tel" name="telp" value="<?= $kontak_admin["telp"] ?>">
									<input class="input is-hidden" type="text" name="id" value="<?= $kontak_admin["id"] ?>">
								</div>
							</div>
						</div>
					</div>
					<!-- Button -->
					<footer class="card-footer">
						<button type="submit" class="card-footer-item button is-info">Ubah</button>
					</footer>
				</form>
			</div>

			<!-- Kontak Ambulan -->
			<div class="column is-6">
				<!-- Form -->
				<form class="card"  method="POST" action="<?= base_url('adminkontak/ubahkontakambulan') ?>">
					<!-- Title -->
					<div class="card-header">
						<p class="card-header-title">Kontak Whatsapp Ambulan</p>
					</div>
					<!-- Input -->
					<div class="card-content">
						<div class="content">
							<div class="field">
								<label class="label">No Telp</label>
								<div class="control">
									<input class="input" type="tel" name="telp" value="<?= $kontak_ambulan["telp"] ?>">
									<input class="input is-hidden" type="text" name="id" value="<?= $kontak_ambulan["id"] ?>">
								</div>
							</div>
						</div>
					</div>
					<!-- Button -->
					<footer class="card-footer">
						<button type="submit" class="card-footer-item button is-info">Ubah</button>
					</footer>
				</form>
			</div>
		</div>
	</div>
</main>