<div class="content">
	<div class="container">
		<div class="card">
			<div class="card-body">
				<?php foreach ($articles as $article) : ?>
					<form action="" method="post">
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="judul">Judul</label>
									<input type="text" name="judul" class="form-control" value="<?= $article->title ?>">
								</div>
								<div class="form-group">
									<label for="released">Release the article ?</label>
									<select name="released" class="form-control">
										<option value="1" <?php echo ($article->released = 1) ? 'selected' : '';  ?>>No</option>
										<option value="0" <?php echo ($article->released = 0) ? 'selected' : ''; ?>>Yes</option>
									</select>
								</div>
								<div class="form-group">
									<label for="content">Content</label>
									<textarea name="content" class="form-control"><?= $article->content ?></textarea>
								</div>
							</div>
							<div class="col-md-4">
								<div class="thumbnail">
									<img src="<?= base_url('assets/upload/' . $article->thumbnail) ?>" alt="<?= $article->thumbnail ?>" class="img-fluid">
								</div>
								<div class="form-group">
									<label for="thumbnail">Change Thumbnail</label>
									<input type="file" name="thumbnail" id="">
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-info">Update</button>
					</form>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
</div>
