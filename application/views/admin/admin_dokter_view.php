<section class="p-5">
	<div class="container is-flex is-align-items-center is-justify-content-space-between">
		<!-- Title -->
		<h4 class="title is-4 mb-0">Daftar Dokter</h4>
		<!-- Button -->
		<a class="button is-success" href="<?= base_url('dokterlist/tambah')?>">
			<span class="icon is-small">
				<i class="ri-add-line"></i>
			</span>
			<span>Tambah Dokter</span>
		</a>
	</div>
</section>

<?php if($this->session->flashdata('pesanDokterList')) : ?>
    <div class="container notification is-success is-light">
		<a class="delete" href="<?= base_url('dokterlist/hapusnotif')?>"></a>
        <?= $this->session->flashdata('pesanDokterList') ?>
    </div>
<?php endif; ?>

<main class="px-5">
	<div class="container">
		<!-- Table -->
		<div class="table-container mt-1">
			<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth mb-6">
				<thead>
					<tr>
						<th>Foto</th>
						<th>Nama</th>
						<th>Telp</th>
						<th>Deskripsi</th>
						<th>Status</th>
						<th>Set</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($list as $data): ?>
						<tr>
							<td>
								<figure class="image is-48x48">
									<img src="<?= base_url() ?>asset/img/<?= $data["foto"] ?>">
								</figure>
							</td>
							<td><?= $data["nama"] ?></td>
							<td><?= $data["telp"] ?></td>
							<td><?= $data["deskripsi"] ?></td>
							<td>
								<?php if($data["status_aktif"] == 1):?>
									<span class="tag is-success">Aktif</span>
								<?php else : ?>
									<span class="tag is-danger">Non-Aktif</span>
								<?php endif; ?>
							</td>
							<td>
								<div class="buttons">
									<a class="button is-info is-light is-small" href="<?= base_url('dokterlist/edit/')?><?= $data["id"] ?>">
										<span class="icon is-small">
											<i class="ri-edit-line"></i>
										</span>
									</a>
									<a class="button is-danger is-light is-small" href="<?= base_url('dokterlist/hapusdokter/')?><?= $data["id"] ?>">
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