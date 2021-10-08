<section class="p-5">
	<div class="container is-flex is-align-items-center is-justify-content-space-between">
		<h4 class="title is-4 mb-0">Daftar Pasien</h4>
	</div>
</section>

<?php if($this->session->flashdata('pesan')) : ?>
    <div class="container notification is-success is-light">
        Field Berhasil <?= $this->session->flashdata('pesan') ?>
    </div>
<?php endif; ?>

<main class="px-5">
	<div class="container">
		<!-- Table -->
		<div class="table-container mt-1">
			<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth mb-6">
				<thead>
					<tr>
						<th><abbr title="Nomor Induk Kependudukan">NIK</abbr></th>
						<th>Nama</th>
						<th>No Pasien</th>
						<th>Tanggal Lahir</th>
						<th>Gender</th>
						<th>Telp</th>
						<th>Alamat</th>
						<th>Set</th>
					</tr>
				</thead>
				<tbody>
                    <?php foreach($list as $data): ?>
                        <tr>
                            <td><?= $data["nik"] ?></td>
                            <td><?= $data["nama"] ?></td>
                            <td><?= $data["no_pasien"] ?></td>
                            <td><?= $data["tgl_lahir"] ?></td>
                            <td class="is-capitalized"><?= $data["gender"] ?></td>
                            <td><?= $data["telp"] ?></td>
                            <td>
                                <?= $data["alamat"] ?>, 
                                <?= $data["kelurahan"] ?> 
                                <?= $data["kecamatan"] ?>
                                <?= $data["kota_kab"] ?>
                                <?= $data["provinsi"] ?>
                            </td>
                            <td>
                                <div class="buttons">
                                    <a class="button is-info is-light is-small" href="<?= base_url('pasienlist/')?><?= $data["id"] ?>">
                                        <span class="icon is-small">
                                            <i class="ri-edit-line"></i>
                                        </span>
                                    </a>
                                    <a class="button is-danger is-light is-small" href="<?= base_url('pasienlist/hapuspasien/')?><?= $data["id"] ?>" onclick="return confirm('Yakin ?')">
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