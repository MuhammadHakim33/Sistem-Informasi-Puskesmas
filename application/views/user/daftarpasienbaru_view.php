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
                <label for="nama">Nama Lengkap</label>
                <input class="input" type="text" id="nama" name="nama" required>
            </div>
            <div class="item">
                <label for="nomor_hp">Nomor Handphone</label>
                <input class="input" type="tel" id="nomor_hp" name="nomor_hp" required>
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
                <input class="input" type="date" id="tgl_lahir" name="tgl_lahir" required>
            </div>

            <!-- Button -->
            <div class="single-button">
                <button type="button" class="button button-next">Masukan Alamat</button>
            </div>
        </div>

        <!-- Alamat -->
        <div class="wrapper alamat">
            <div class="item">
                <label for="alamat">Alamat</label>
                <input class="input" type="text" id="alamat" name="alamat" required>
            </div>
            <div class="item">
                <label for="provinsi">Provinsi</label>
                <input class="input" type="text" id="provinsi" name="provinsi" required>
            </div>
            <div class="item">
                <label for="kota-kab">Kota/Kabupaten</label>
                <input class="input" type="tel" id="kota-kab" name="kota-kab" required>
            </div>
            <div class="item">
                <label for="kec">Kecamatan</label>
                <input class="input" type="tel" id="kec" name="kec" required>
            </div>
            <div class="item">
                <label for="kel">Kel</label>
                <input class="input" type="tel" id="kel" name="kel" required>
            </div>

            <!-- Button -->
            <div class="duo-button">
                <button type="button" class="button button-prev">Sebelumnya</button>
                <button type="submit" class="button button-submit">Daftar</button>
            </div>
        </div>
    </form>
</main>