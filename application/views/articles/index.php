<div class="content">
	<div class="container">
		<div class="card">
			<div class="card-body">
				<a href="<?= base_url('articles/addarticle') ?>" class="btn btn-info">New</a>
				<table class="table table-bordered">
					<thead>
						<th>No</th>
						<th>Judul</th>
						<th>Terbit</th>
						<th>Author</th>
						<th>Thumbnail</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						<?php foreach ($articles as $article) : ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $article->title; ?></td>
								<td><?php echo ($article->released == '1') ? $article->release_date : 'not released' ?></td>
								<td><?php echo $article->author; ?></td>
								<td><?php echo $article->thumbnail; ?></td>
								<td>
									<div class="d-inline">
										<a href="<?= base_url('articles/update/' . $article->id) ?>" class="btn btn-warning">Update</a>
										<a href="<?= base_url('articles/delete/' . $article->id) ?>" class="btn btn-danger">Delete</a>
									</div>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
