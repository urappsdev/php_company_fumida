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
						<th colspan="2">Action</th>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						<?php foreach ($articles as $article) : ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $article->title; ?></td>
								<td><?php echo ($article->released == '1') ? $article->release_date : 'not released' ?></td>
								<td><?php echo $article->author; ?></td>
								<td><img src="<?= base_url('assets/upload/') . $article->thumbnail ?>" alt="<?php echo $article->thumbnail; ?>" class="img-fluid" width="120"></td>
								<td>
									<a href="<?= base_url('articles/update/' . $article->slug) ?>" class="btn btn-warning">Update</a>
								</td>
								<td>
									<form action="<?= base_url('articles/delete/' . $article->id) ?>" onclick="return confirm('Hapus data')" method="post"><button type="submit" class="btn btn-danger">Delete</button></form>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
