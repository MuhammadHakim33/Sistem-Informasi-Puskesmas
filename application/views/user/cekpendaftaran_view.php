<main>
    <!-- Header -->
    <header id="page-header" class="section daftar">
        <!-- Breadcrumb -->
        <nav id="breadcrumb" class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li><a href="<?= base_url() ?>" class="text-body-2">Beranda</a></li>
                <li><a class="text-body-2">Cek Pendaftaran</a></li>
            </ul>
        </nav>
        <!-- Title -->
        <section id="title">
           <div class="wrapper">
                <h5>Cek Pendaftaran</h5>
           </div>
        </section>
    </header>

    <!-- Form -->
    <form action="" method="POST" id="form" class="section daftar-layanan">
        <!-- Identitas -->
        <div class="wrapper identitas active">
            <div class="item">
                <label for="nik">NIK</label>
                <input class="input" type="text" id="nik" name="nik">
                <?= form_error('nik', '<p class="help is-danger">', '</p>'); ?>
            </div>
            <div class="item">
                <label for="tgl_kunjungan">Tanggal Kunjungan</label>
                <input class="input" type="date" id="tgl_kunjungan" name="tgl_kunjungan">
                <?= form_error('tgl_kunjungan', '<p class="help is-danger">', '</p>'); ?>
            </div>

            <!-- Button -->
            <div id="grup-button" class="single-button horizontal-position">
                <button type="submit" class="button button-submit button-main">Cari</button>
            </div>
        </div>

    </form>
</main>