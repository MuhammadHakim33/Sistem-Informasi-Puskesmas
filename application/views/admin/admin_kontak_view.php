<section class="p-5">
	<div class="container is-flex is-align-items-center is-justify-content-space-between">
		<h4 class="title is-4 mb-0">Kontak</h4>
	</div>
</section>

<main class="px-5">
	<div class="container">
		<div class="columns">
			<!-- Kontak Admin -->
			<div class="column is-6">
				<!-- Form -->
				<form class="card">
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
									<input class="input" type="tel" value="<?= $kontak_admin["telp"] ?>">
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
				<form class="card">
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
									<input class="input" type="tel" value="<?= $kontak_ambulan["telp"] ?>">
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