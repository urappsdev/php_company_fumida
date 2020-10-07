<div class="container">
	<div class="col-md-4 m-auto">
		<div class="card">
			<h4 class="text-secondary text-center mt-3">
				<i class="fas fa-user-plus"> Register</i>
			</h4>
			<div class="card-body">
				<?= $this->session->flashdata('messages'); ?>
				<form action="<?= base_url('auth/do_register') ?>" method="post">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control" placeholder='your@mail.com'>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="vpassword">Confirm Password</label>
						<input type="password" name="vpassword" class="form-control" placeholder="Confirm Password">
					</div>
					<button type="submit" class="btn btn-info">Register</button>
				</form>
				<p class="mt-3 mb-2">Aleready have an account ? <a href="<?= base_url('auth/login') ?>">login</a></p>
			</div>
		</div>
	</div>
</div>
