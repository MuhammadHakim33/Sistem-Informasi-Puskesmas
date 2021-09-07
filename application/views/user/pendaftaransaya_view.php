<main>
    <!-- Header -->
    <header id="page-header" class="section daftar">
        <!-- Breadcrumb -->
        <nav id="breadcrumb" class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li><a href="<?= base_url() ?>" class="text-body-2">Beranda</a></li>
                <li><a class="text-body-2">Pendaftaran Saya</a></li>
            </ul>
        </nav>
        <!-- Title -->
        <section id="title">
           <div class="wrapper">
                <h5>Pendaftaran Saya</h5>
           </div>
        </section>
    </header>

    <!-- Form -->
    <form action="" id="form" class="section daftar-layanan">
        <!-- Identitas -->
        <div class="wrapper identitas active">
            <div class="item">
                <label for="nik">NIK</label>
                <input class="input" type="text" id="nik" name="nik" required>
            </div>
            <div class="item">
                <label for="tgl_kunjungan">Tanggal Kunjungan</label>
                <input class="input" type="date" id="tgl_kunjungan" name="tgl_kunjungan" required>
            </div>

            <!-- Button -->
            <div id="grup-button" class="single-button horizontal-position">
                <button type="button" class="button button-next button-main">Cari</button>
            </div>
        </div>

    </form>
</main>