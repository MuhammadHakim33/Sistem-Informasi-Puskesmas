<main id="beranda-page">
    <!--Banner  -->
    <figure id="banner" class="section" role="banner">
        <img src="<?= base_url('asset/img/banner.png') ?>" alt="">
    </figure>

    <!-- Navigation Feature -->
    <nav id="nav-features" class="section" role="navigation">
        <div class="columns is-multiline is-mobile is-variable is-2">
            <div class="column is-6">
                <a href="https://api.whatsapp.com/send?phone=62<?= $ambulan ?>" target="_blank">
                    <div class="box icon"><i class="ri-taxi-line ri-lg"></i></div>
                    <p class="text-body-2">Panggil Ambulan</p>
                </a>
            </div>
            <div class="column is-6">
                <a href="<?= base_url('konsultasi') ?>">
                    <div class="box icon"><i class="ri-message-2-line ri-lg"></i></i></div>
                    <p class="text-body-2">Konsultasi Gratis</p>
                </a>
            </div>
            <div class="column is-6">
                <a href="<?= base_url('daftar') ?>">
                    <div class="box icon"><i class="ri-dossier-line ri-lg"></i></div>
                    <p class="text-body-2">Daftar Layanan</p>
                </a>
            </div>
            <div class="column is-6">
                <a href="<?= base_url('pendaftaransaya') ?>">
                    <div class="box icon"><i class="ri-search-line ri-lg"></i></div>
                    <p class="text-body-2">Pendaftaran Saya</p>
                </a>
            </div>
        </div>
    </nav>

    <!-- Tracker -->
    <section id="tracker" class="section">
        <div class="columns is-multiline is-variable is-2">
            <!-- Title -->
            <div class="column is-12">
                <h5>Kasus Covid-19 di Indonesia</h5>
            </div>
            <div class="column is-12">
                <div class="box has-text-centered">
                    <p>Terkonfirmasi</p>
                    <h4><?= $api_covid[0]["positif"]; ?></h4>
                </div>
            </div>
            <div class="column is-12">
                <div class="box has-text-centered">
                    <p class="text-body-1">Dalam Perawatan</p>
                    <h4><?= $api_covid[0]["dirawat"]; ?></h4>
                </div>
            </div>
            <div class="column is-12">
                <div class="box has-text-centered">
                    <p class="text-body-1">Sembuh</p>
                    <h4><?= $api_covid[0]["sembuh"]; ?></h4>
                </div>
            </div>
            <div class="column is-12">
                <div class="box has-text-centered">
                    <p class="text-body-1">Meninggal</p>
                    <h4><?= $api_covid[0]["meninggal"]; ?></h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Artikel Berita -->
    <section id="artikel" class="section">
        <div class="columns is-multiline is-variable is-2">
            <!-- Title -->
            <div class="column is-12">
                <h5>Artikel Gaya Hidup</h5>
            </div>
            <!-- Artikel List -->
            <div class="column is-12">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <!-- Item -->
                        <?php for($i = 0; $i < 5; $i++): ?>
                            <a href="<?= $api_berita[$i]['link'] ?>" class="swiper-slide card" role="article" target="_blank">
                                <figure class="card-image" 
                                    style="background-image: url('<?= $api_berita[$i]['thumbnail'] ?>');">
                                </figure>
                                <div class="card-content">
                                    <div class="content ">
                                        <h6 class="title-artikel"><?= $api_berita[$i]['title'] ?></h6>
                                        <footer class="card-footer">
                                            <span class="tag tag-kategori text-body-2">CNN</span>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
            <!-- Nav -->
            <nav class="column is-12 navigation">
                <a href="<?= base_url('artikel') ?>">
                    <h6>Lihat Semua</h6>
                    <i class="ri-arrow-right-s-line ri-lg"></i>
                </a>
            </nav>
        </div>
    </section>

    <!-- kontak -->
    <section id="kontak" class="section">
        <div class="card">
            <div class="card-content has-text-centered">
                <h6>Butuh Bantuan kami ?</h6>
                <a href="https://api.whatsapp.com/send?phone=62<?= $admin ?>" target="_blank" class="button">
                    <i class="ri-whatsapp-line ri-lg"></i>
                    &ensp;<p>Hubungi Kami Sekarang</p>
                </a>
            </div>
        </div>
    </section>
</main>