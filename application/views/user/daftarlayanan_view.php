<main>
    <!-- Header -->
    <header id="page-header" class="section daftar">
        <!-- Breadcrumb -->
        <nav id="breadcrumb" class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li><a href="<?= base_url() ?>" class="text-body-2">Beranda</a></li>
                <li><a class="text-body-2">Daftar Layanan</a></li>
            </ul>
        </nav>
        <!-- Title -->
        <section id="title">
           <div class="wrapper">
                <h5>Daftar Layanan</h5>
                <a href="<?= base_url('daftar/pasien_baru') ?>" class="button is-white">
                    <i class="ri-add-line ri-1x"></i>
                    <h6>Pasien Baru</h6>
                </a>
           </div>
           <div class="steps">
               <span class="step-1"></span>
               <span class="step-2"></span>
           </div>

           <?php if($this->session->flashdata('pesanDaftar')) : ?>
               <div class="container notification is-danger is-light mt-5">
               <a class="delete" href="<?= base_url('daftar/hapusnotif')?>"></a>
                <?= $this->session->flashdata('pesanDaftar') ?>
               </div>
           <?php endif; ?>
        </section>

    </header>

    <!-- Form -->
    <form action="" method="POST" id="form" class="section daftar-layanan">
        <!-- List -->
        <div class="wrapper list-layanan active">
            <p>Jenis Layanan</p>
            <!-- Item -->
            <?php foreach($list_layanan as $list): ?>
                <div class="item">
                    <input type="radio" name="layanan" id='<?= $list["nama_layanan"] ?>' value='<?= $list["id"] ?>'>
                    <label for='<?= $list["nama_layanan"] ?>' class="form-check-label">
                        <span class="dot"></span>
                        <h6 class="is-capitalized"><?= $list["nama_layanan"] ?></h6>
                        <p class="text-body-2 is-capitalized"><?= $list["keterangan"] ?></p>
                    </label>
                </div>
            <?php endforeach; ?>
            
            <?= form_error('layanan', '<p class="help is-danger">', '</p>'); ?>

            <!-- Button -->
            <div id="grup-button" class="single-button horizontal-position">
                <button type="button" class="button button-next button-main">Masukan Data Pasien</button>
            </div>
        </div>

        <!-- Data Pasien -->
        <div class="wrapper data-pasien">
            <div class="item">
                <label for="nik">NIK Pasien</label>
                <input class="input" type="text" id="nik" name="nik">
                <?= form_error('nik', '<p class="help is-danger">', '</p>'); ?>
            </div>
            <div class="item">
                <label for="nama">Nama Lengkap Pasien</label>
                <input class="input" type="text" id="nama" name="nama">
                <?= form_error('nama', '<p class="help is-danger">', '</p>'); ?>
            </div>
            <div class="item">
                <label for="tgl_kunjungan">Tanggal Kunjungan</label>
                <input class="input" type="date" id="tgl_kunjungan" name="tgl_kunjungan">
                <?= form_error('tgl_kunjungan', '<p class="help is-danger">', '</p>'); ?>
            </div>

            <!-- Button -->
            <div id="grup-button" class="duo-button horizontal-position">
                <button type="button" class="button button-prev button-second">Sebelumnya</button>
                <button type="submit" class="button button-submit button-main">Daftar</button>
            </div>
        </div>
    </form>
</main>