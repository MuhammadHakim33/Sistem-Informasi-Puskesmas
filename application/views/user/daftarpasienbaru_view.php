<main>
    <!-- Header -->
    <header id="page-header" class="section daftar">
        <!-- Breadcrumb -->
        <nav id="breadcrumb" class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li><a href="<?= base_url() ?>" class="text-body-2">Beranda</a></li>
                <li><a class="text-body-2">Daftar Pasien Baru</a></li>
            </ul>
        </nav>
        <!-- Title -->
        <section id="title">
           <div class="wrapper">
                <h5>Daftar Pasien Baru</h5>
           </div>
           <div class="steps">
               <span class="step-1"></span>
               <span class="step-2"></span>
           </div>
        </section>

        <!-- Alert -->
        <?php if(validation_errors()) : ?>
            <article class="message is-danger mt-5">
                <div class="message-body p-4">
                    <?= validation_errors(); ?>
                </div>
            </article>
        <?php endif; ?>

    </header>
    
    <!-- Form -->
    <form action="" method="POST" id="form" class="section daftar-layanan">
        <!-- Identitas -->
        <div class="wrapper identitas active">
            <div class="item">
                <label for="nik">NIK</label>
                <input class="input" type="text" id="nik" name="nik">
            </div>
            <div class="item">
                <label for="nama">Nama Lengkap</label>
                <input class="input" type="text" id="nama" name="nama">
            </div>
            <div class="item">
                <label for="telp">Nomor Handphone</label>
                <input class="input" type="tel" id="telp" name="telp">
            </div>
            <div class="item">
                <p>Jenis Kelamin</p>
                <div class="columns is-mobile is-multiline is-variable">
                    <!-- Pria -->
                    <div class="column is-6">
                        <input class="form-check-input" type="radio" name="gender" id="pria" value="pria">
                        <label class="form-check-label" for="pria">
                            <div class="dot"></div>
                            Pria
                        </label>
                    </div>
                    <!-- Wanita -->
                    <div class="column is-6">
                        <input class="form-check-input" type="radio" name="gender" id="wanita" value="wanita">
                        <label class="form-check-label" for="wanita">
                            <div class="dot"></div>
                            Wanita
                        </label>
                    </div>
                </div>
            </div>
            <div class="item">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input class="input" type="date" id="tgl_lahir" name="tgl_lahir">
            </div>

            <!-- Button -->
            <div id="grup-button" class="single-button horizontal-position">
                <button type="button" class="button button-next button-main">Masukan Alamat</button>
            </div>
        </div>

        <!-- Alamat -->
        <div class="wrapper alamat">
            <div class="item">
                <label for="alamat">Alamat</label>
                <input class="input" type="text" id="alamat" name="alamat">
            </div>
            <div class="item">
                <label for="provinsi">Provinsi</label>
                <input class="input" type="text" id="provinsi" name="provinsi">
            </div>
            <div class="item">
                <label for="kota_kab">Kota/Kabupaten</label>
                <input class="input" type="text" id="kota_kab" name="kota_kab">
            </div>
            <div class="item">
                <label for="kecamatan">Kecamatan</label>
                <input class="input" type="text" id="kecamatan" name="kecamatan">
            </div>
            <div class="item">
                <label for="kelurahan">Kelurahan</label>
                <input class="input" type="text" id="kelurahan" name="kelurahan">
            </div>

            <!-- Button -->
            <div id="grup-button" class="duo-button horizontal-position">
                <button type="button" class="button button-prev button-second">Sebelumnya</button>
                <button type="submit" class="button button-submit button-main">Daftar</button>
            </div>
        </div>
    </form>
</main>