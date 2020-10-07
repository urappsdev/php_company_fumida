<div style="margin-top: 100px;">
	<div class="container">
		<?php foreach ($articles as $article) : ?>
			<div class="card mt-3">
				<img class=" card-img-top" src="..." alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title"><?php echo $article->title; ?></h5>
					<p class="card-text"><?php echo substr($article->content, 0, 100); ?></p>
					<a href="<?= base_url() . 'blog/read/' . $article->slug ?>" class="btn btn-primary">Pelajari</a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
