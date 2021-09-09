<main id="artikel-page">
    <!-- Header -->
    <header id="page-header" class="section artikel">
        <!-- Breadcrumb -->
        <nav id="breadcrumb" class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li><a href="<?= base_url() ?>" class="text-body-2">Beranda</a></li>
                <li><a class="text-body-2">Artikel Gaya Hidup</a></li>
            </ul>
        </nav>
        <!-- Title -->
        <section id="title">
            <h5>Artikel Gaya Hidup</h5>
        </section>
    </header>

    <!-- List Artikel -->
    <section id="artikel" class="section">
        <div class="columns is-multiline is-variable is-2">
            <?php for($i = 0; $i < 20; $i++): ?>
            <div class="column is-12">
                <!-- Item -->
                <a href="<?= $api_berita[$i]['link'] ?>" class="swiper-slide card" role="article" target="_blank">
                    <div class="card-image" 
                        style="background-image: url('<?= $api_berita[$i]['thumbnail'] ?>');">
                    </div>
                    <div class="card-content">
                        <div class="content ">
                            <h6> <?= $api_berita[$i]['title'] ?></h6>
                            <footer class="card-footer">
                                <span class="tag tag-kategori text-body-2">CNN</span>
                            </footer>
                        </div>
                    </div>
                </a>
            </div>
            <?php endfor; ?>
        </div>
    </section>
</main>