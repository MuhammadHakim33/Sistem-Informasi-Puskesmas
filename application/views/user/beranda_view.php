<main id="beranda-page">
    <!--Banner  -->
    <figure id="banner" class="section" role="banner">
        <img src="<?= base_url('asset/img/banner.png') ?>" alt="">
    </figure>

    <!-- Navigation Feature -->
    <nav id="nav-features" class="section" role="navigation">
        <div class="columns is-multiline is-mobile is-variable is-2">
            <div class="column">
                <a href="">
                    <div class="box icon"><i class="ri-taxi-line ri-lg"></i></div>
                    <p class="text-body-2">Panggil Ambulan</p>
                </a>
            </div>
            <div class="column">
                <a href="<?= base_url('konsultasi') ?>">
                    <div class="box icon"><i class="ri-message-2-line ri-lg"></i></i></div>
                    <p class="text-body-2">Konsultasi Gratis</p>
                </a>
            </div>
            <div class="column">
                <a href="<?= base_url('daftar') ?>">
                    <div class="box icon"><i class="ri-dossier-line ri-lg"></i></div>
                    <p class="text-body-2">Daftar Layanan</p>
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
                    <h4>3.224.997</h4>
                </div>
            </div>
            <div class="column is-12">
                <div class="box has-text-centered">
                    <p class="text-body-1">Dalam Perawatan</p>
                    <h4>3.224.997</h4>
                </div>
            </div>
            <div class="column is-12">
                <div class="box has-text-centered">
                    <p class="text-body-1">Sembuh</p>
                    <h4>3.224.997</h4>
                </div>
            </div>
            <div class="column is-12">
                <div class="box has-text-centered">
                    <p class="text-body-1">Meninggal</p>
                    <h4>3.224.997</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Artikel Berita -->
    <section id="artikel" class="section">
        <div class="columns is-multiline is-variable is-2">
            <!-- Title -->
            <div class="column is-12">
                <h5>Artikel Kesehatan</h5>
            </div>
            <!-- Artikel List -->
            <div class="column is-12">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <!-- Item -->
                        <a href="" class="swiper-slide card" role="article" target="_blank">
                            <div class="card-image" style="background-image: url('https://bulma.io/images/placeholders/1280x960.png');"></div>
                            <div class="card-content">
                                <div class="content ">
                                    <h6> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab expedita</h6>
                                    <footer class="card-footer">
                                        <span class="tag tag-kategori text-body-2">Covid-19</span>
                                        <p class="text-body-2"> CNN </p>
                                    </footer>
                                </div>
                            </div>
                        </a>
                        <a href="" class="swiper-slide card" role="article" target="_blank">
                            <div class="card-image" style="background-image: url('https://bulma.io/images/placeholders/1280x960.png');"></div>
                            <div class="card-content">
                                <div class="content ">
                                    <h6> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab expedita</h6>
                                    <footer class="card-footer">
                                        <span class="tag tag-kategori is-small text-body-2">Covid-19</span>
                                        <p class="text-body-2"> CNN </p>
                                    </footer>
                                </div>
                            </div>
                        </a>
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
                <a href="" class="button">
                    <i class="ri-whatsapp-line ri-lg"></i>
                    &ensp;<p>Hubungi Kami Sekarang</p>
                </a>
            </div>
        </div>
    </section>
</main>