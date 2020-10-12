<div class="container">
	<div class="col-md-4 m-auto">
		<div class="card">
			<h4 class="text-secondary text-center mt-3">
				<i class="fas fa-user"> Login</i>
			</h4>
			<div class="card-body">
				<?= $this->session->flashdata('messages'); ?>
				<form action="<?= base_url('auth/do_login') ?>" method="post">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control" placeholder="Your@mail.com">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-info  btn-block">Login</button>
				</form>
			</div>
		</div>
	</div>
</div>
