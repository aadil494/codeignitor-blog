<h1 class="mt-5"> 
	<?=$title; ?>
</h1>

<?php foreach($posts as $post){ ?>
<div class="card p-3 mt-1">
	<div class="card-heading">
		<h4><?=$post['title']?></h4>
		<small class="text-muted "><?=$post['created_at']?></small>
	</div>
	<div class="card-body">
		<p><?=$post['body']?></p>
	</div>
	
</div>
<?php } ?>
