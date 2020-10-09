<?php foreach ($reads as $read) : ?>
	<div class="container" style="margin-top: 100px;">
		<div class="card">
			<img class=" card-img-top" src="..." alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title"><?php echo $read->title; ?></h5>
				<p><?php echo $read->author; ?></p>
				<p><?php echo $read->release_date; ?></p>
				<p class="card-text"><?php echo $read->content; ?></p>
			</div>
		</div>
		<div class="card mt-2">
			<div class="card-body">
				<?php foreach ($comment as $comm) : ?>
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-1">
									<img src="<?= base_url('assets\img\default-avatar.png') ?>" alt="Avatar" class="img-fluid rounded-circle" width="50px">
								</div>
								<div class="col-md-11">
									<div class="mt-1">
										<p> <?= htmlspecialchars($comm->name) ?></p>
										<?= htmlspecialchars($comm->comment) ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				<div class="mt-5">
					<div class="card">
						<div class="card-body">
							<form action="<?= base_url('blog/comment') ?>" method="post">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" name="name" required>
									<input type="hidden" name="id_article" class="form-control" value="<?= $read->id ?>">
									<input type="hidden" name="slug" class="form-control" value="<?= $read->slug ?>">
								</div>
								<div class="form-group">
									<label for="comment">Comment</label>
									<textarea name="comment" class="form-control" required></textarea>
								</div>
								<button type="submit" class="btn btn-info float-right">Comment</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>
