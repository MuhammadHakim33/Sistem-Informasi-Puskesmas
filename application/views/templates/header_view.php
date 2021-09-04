<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url('asset/css/style.css') ?>">
	<link rel="stylesheet" href="<?= base_url('asset/css/bulma.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
	<title>Puskesmas - <?= $title ?></title>
</head>
<body>
    
    <header id="header">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href=""><img src="<?= base_url('asset/img/logo.png') ?>" ></a>
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>

                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item" href=""><h6>Beranda</h6></a>
                        <a class="navbar-item" href=""><h6>Char Dokter</h6></a>
                        <a class="navbar-item" href=""><h6>Daftar Layanan</h6></a>
                        <a class="navbar-item" href=""><h6>Daftar Pasien Baru</h6></a>
                        <a class="navbar-item" href=""><h6>Panggil Ambulan</h6></a>
                        <a class="navbar-item" href=""><h6>Kebijakan Privasi</h6></a>
                        <a class="navbar-item" href=""><h6>Tentang Kami</h6></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
