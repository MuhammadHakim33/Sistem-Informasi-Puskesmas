<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/css/admin_style.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title><?= $title ?></title>
</head>
<body>

<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
	<div class="container">
		<div class="navbar-brand">
			<a class="navbar-item" href="<?= base_url('admin') ?>"><strong>ADMIN</strong></a>

			<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
				data-target="navbarBasicExample">
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
			</a>
		</div>

		<div id="navbarBasicExample" class="navbar-menu">
			<div class="navbar-start">
				<a class="navbar-item" href="<?= base_url('admin') ?>">Dashboard</a>
				<a class="navbar-item">Pasien</a>
				<a class="navbar-item">Dokter</a>
				<a class="navbar-item">Kontak</a>
			</div>

			<div class="navbar-end">
				<div class="navbar-item">
					<div class="buttons are-small">
						<a class="button is-danger is-light">
							<span class="icon">
								<i class="ri-logout-box-r-line"></i>
							</span>
							<span>Logout</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>
