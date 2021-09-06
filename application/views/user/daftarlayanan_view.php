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
        </section>

        <!-- Alert -->
        <article class="message is-danger mt-5">
            <div class="message-body p-4">
                Isi Semua Field. 
            </div>
        </article>
    </header>

    <!-- Form -->
    <form action="" id="form" class="section daftar-layanan">
        <!-- List -->
        <div class="wrapper list-layanan active">
            <p>Jenis Layanan</p>
            <!-- Item -->
            <div class="item">
                <input type="radio" name="layanan" id="gigi" value="gigi" required>
                <label for="gigi" class="form-check-label">
                    <span class="dot"></span>
                    <h6>Gigi</h6>
                    <p class="text-body-2">Pemeriksaan dan penyembuhan gigi.</p>
                </label>
            </div>
            <div class="item">
                <input type="radio" name="layanan" id="umum" value="umum" required>
                <label for="umum" class="form-check-label">
                    <span class="dot"></span>
                    <h6>Umum</h6>
                    <p class="text-body-2">Sakit dengan gejala umum.</p>
                </label>
            </div>

            <!-- Button -->
            <div class="single-button">
                <button type="button" class="button button-next">Masukan Data Pasien</button>
            </div>
        </div>

        <!-- Data Pasien -->
        <div class="wrapper data-pasien">
            <div class="item">
                <label for="nik">NIK Pasien</label>
                <input class="input" type="text" id="nik" name="nik" required>
            </div>
            <div class="item">
                <label for="nama">Nama Lengkap Pasien</label>
                <input class="input" type="text" id="nama" name="nama" required>
            </div>
            <div class="item">
                <label for="tgl_kunjungan">Tanggal Kunjungan</label>
                <input class="input" type="date" id="tgl_kunjungan" name="tgl_kunjungan" required>
            </div>

            <!-- Button -->
            <div class="duo-button">
                <button type="button" class="button button-prev">Sebelumnya</button>
                <button type="submit" class="button button-submit">Daftar</button>
            </div>
        </div>
    </form>

</main>