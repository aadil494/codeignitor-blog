<h2><?php echo $post['title']; ?></h2>
<small>Posted On: <?=$post['created_at'] ?></small>
<div class="post-body">
	<?=$post['body'] ?>
</div>

<div class="d-flex" style="display:flex; justify-content:end; width:100%">
	<?=form_open('/posts/delete/'.$post['id']); ?>
		<input type="submit" value="delete" class="btn btn-danger ml-2">
	</form>
	<a href="/posts/edit/<?=$post['slug']?>" class="btn btn-primary ">Edit</a>
</div>
