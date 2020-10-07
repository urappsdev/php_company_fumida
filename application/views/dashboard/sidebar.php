<div class="sidebar" data-color="white" data-active-color="danger">
	<div class="logo">
		<a href="https://www.creative-tim.com" class="simple-text logo-mini">
			<div class="logo-image-small">
				<img src="<?= base_url() ?>assets/img/logo-small.png">
			</div>
			<!-- <p>CT</p> -->
		</a>
		<a href="https://www.creative-tim.com" class="simple-text logo-normal">
			Creative Tim
			<!-- <div class="logo-image-big">
            <img src="<?= base_url() ?>assets/img/logo-big.png">
          </div> -->
		</a>
	</div>
	<div class="sidebar-wrapper">
		<ul class="nav">
			<li class="active ">
				<a href="<?= base_url('dashboard') ?>">
					<i class="nc-icon nc-bank"></i>
					<p>Dashboard</p>
				</a>
			</li>
			<li>
				<a href="<?= base_url('articles') ?>">
					<i class="nc-icon nc-diamond"></i>
					<p>Article</p>
				</a>
			</li>
			<li>
				<a href="comment">
					<i class="nc-icon nc-pin-3"></i>
					<p>Comment</p>
				</a>
			</li>
			<li>
				<a href="<?= base_url('auth/logout') ?>">
					<i class="nc-icon nc-pin-3"></i>
					<p>Logout</p>
				</a>
			</li>
		</ul>
	</div>
</div>
