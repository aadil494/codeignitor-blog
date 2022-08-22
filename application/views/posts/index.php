<h1 class="mt-5"> 
	<?=$title; ?>
</h1>
<?php foreach($posts as $post){ ?>
<div class="card p-3 mt-1">
	<div class="card-heading">
		<h4><?=$post['title']?></h4>
		<small class="text-muted ">Posted on: <?=$post['created_at']?> in <strong><?=$post['name']?></strong></small>
	</div>
	<div class="card-body">
		<p><?=word_limiter($post['body'], 60)?></p>
		<p><a  btn btn-default href="<?=site_url('/posts/'.$post['slug'])?>">Read More</a></p>
	</div>
	
</div>
<?php } ?>
