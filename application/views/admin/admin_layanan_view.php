<section class="p-5">
	<div class="container is-flex is-align-items-center is-justify-content-space-between">
		<!-- Title -->
		<h4 class="title is-4 mb-0">Daftar Layanan</h4>
		<!-- Button -->
		<a class="button is-success" href="<?= base_url('layanan/tambah')?>">
			<span class="icon is-small">
				<i class="ri-add-line"></i>
			</span>
			<span>Tambah Layanan</span>
		</a>
	</div>
</section>

<?php if($this->session->flashdata('pesanLayanan')) : ?>
    <div class="container notification is-success is-light">
		<a class="delete" href="<?= base_url('layanan/hapusnotif')?>"></a>
        <?= $this->session->flashdata('pesanLayanan') ?>
    </div>
<?php endif; ?>

<main class="px-5">
	<div class="container">
		<!-- Table -->
		<div class="table-container mt-1">
			<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth mb-6">
				<thead>
					<tr>
						<th>Layanan</th>
						<th>Deskripsi</th>
						<th>Status</th>
						<th>Set</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($list as $data): ?>
						<tr>
							<td><?= $data["nama_layanan"] ?></td>
							<td><?= $data["keterangan"] ?></td>
							<td>
								<?php if($data["status_aktif"] == 1):?>
									<span class="tag is-success">Aktif</span>
								<?php else : ?>
									<span class="tag is-danger">Non-Aktif</span>
								<?php endif; ?>
							</td>
							<td>
								<div class="buttons">
									<a class="button is-info is-light is-small" href="<?= base_url('layanan/edit/')?><?= $data["id"] ?>">
										<span class="icon is-small">
											<i class="ri-edit-line"></i>
										</span>
									</a>
									<a class="button is-danger is-light is-small" href="<?= base_url('layanan/hapuslayanan/')?><?= $data["id"] ?>">
										<span class="icon is-small">
											<i class="ri-delete-bin-line"></i>
										</span>
									</a>
								</div>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

	</div>
</main>