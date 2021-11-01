<main>

    <?php var_dump($getPendaftaran[0]) ?>

    <header id="page-header" class="section daftar-sukses">
        <!-- Icon -->
        <figure id="icon" class="sukses-icon" >
            <i class="ri-check-fill ri-2x"></i>
        </figure>

        <!-- Text -->
        <div class="wrapper text has-text-centered">
            <h5>Daftar Layanan Berhasil</h5>
            <p>Terima kasih telah melakukan pendaftaran. Silahkan datang ke puskesmas dan melakukan registrasi ulang.</p>
        </div>
    </header>

    <section id="summary-daftar" class="section">
        <div class="columns is-multiline is-variable is-1">
            <div class="column is-12">
                <h6>Nomor Antrian</h6>
                <p class="tag tag-kategori is-medium"><?= $getPendaftaran[0]['no_antri']; ?></p>
            </div>
            <div class="column is-12">
                <h6>Jenis layanan</h6>
                <p><?= $getPendaftaran[0]['nama_layanan']; ?></</p>
            </div>
            <div class="column is-12">
                <h6>Hadir Pada</h6>
                <p><?= $getPendaftaran[0]['tgl_kunjungan']; ?></</p>
            </div>
            <hr>
            <div class="column is-12">
                <h6>Kode Booking</h6>
                <p><?= $getPendaftaran[0]['kode_booking']; ?></</p>
            </div>
            <div class="column is-12">
                <h6>Tanggal Booking</h6>
                <p><?= $getPendaftaran[0]['tgl_booking']; ?></</p>
            </div>
        </div>
    </section>

    <section id="grup-button" class="section vertical-position">
        <a href="<?= base_url() ?>" class="button button-main mb-4">Beranda</a>
    </section>

</main>