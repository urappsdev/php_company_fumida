<div class="content">
	<div class="container">
		<div class="card">
			<div class="card-body">
				<form action="<?= base_url('articles/submit') ?>" method="post">
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" name="title" class="form-control">
							</div>
							<div class="form-group">
								<label for="released">Release the article ?</label>
								<select name="released" class="form-control">
									<option value="1">No</option>
									<option value="0">Yes</option>
								</select>
							</div>
							<div class="form-group">
								<label for="content">Content</label>
								<textarea name="content" class="form-control"></textarea>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="thumbnail">Add Thumbnail</label>
								<input type="file" name="thumbnail" id="">
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-info">Update</button>
				</form>
			</div>
		</div>
	</div>
</div>
