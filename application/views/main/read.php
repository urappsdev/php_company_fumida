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
	</div>
<?php endforeach; ?>
