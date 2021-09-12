<main id="kosultasi-page">
    <!-- Header -->
    <header id="page-header" class="section konsul">
        <!-- Breadcrumb -->
        <nav id="breadcrumb" class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li><a href="<?= base_url() ?>" class="text-body-2">Beranda</a></li>
                <li><a class="text-body-2">Konsultasi Gratis</a></li>
            </ul>
        </nav>
        <!-- Title -->
        <section id="title">
            <h5>Konsultasi Gratis</h5>
            <p>Hanya untuk Konsultasi kesehatan, tidak untuk perawatan dan penyembuhan. 
                Buka hari Senin - Jum’at jam 09:00 - 15.00 WIB.
            </p>
        </section>
    </header>

    <!-- List Dokter -->
    <section id="list-dokter" class="section">
        <div class="columns is-multiline is-variable is-2">
            <?php foreach($list_dokter as $dokter): ?>
                <div class="column is-12">
                    <a href="https://api.whatsapp.com/send?phone=62<?= $dokter['telp'] ?>" target="_blank" class="card">
                        <div class="card-content">
                            <!-- Photo -->
                            <figure class="img">
                                <img src="<?= base_url() ?>asset/img/<?= $dokter['foto'] ?>" alt="" srcset="">
                            </figure>
                            <!-- Text -->
                            <div class="text">
                                <h6><?= $dokter['nama'] ?></h6>
                                <p><?= $dokter['deskripsi'] ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>