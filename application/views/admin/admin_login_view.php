<main class="container login">
	<div class="card">
		<header class="card-header">
			<p class="card-header-title">Login Admin Dashboard</p>
		</header>
		<div class="card-content">
			<?php if($this->session->flashdata('pesan')) : ?>
				<div class="container notification is-danger is-light">
					<?= $this->session->flashdata('pesan') ?>
				</div>
			<?php endif; ?>
			
			<form class="content" method="POST" action="<?= base_url('adminlogin') ?>">
				<!-- Username -->
				<div class="field">
					<label class="label">Username</label>
					<div class="control">
						<input class="input" type="text" name="username">
					</div>
					<?= form_error('username', '<p class="help is-danger">', '</p>'); ?>
				</div>
				<!-- Password -->
				<div class="field">
					<label class="label">Password</label>
					<div class="control">
						<input class="input" type="password" name="password">
					</div>
					<?= form_error('password', '<p class="help is-danger">', '</p>'); ?>
				</div>

				<div class="field">
					<div class="control">
						<button type="submit" class="button is-primary">Login</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</main>