<h2><?=$title?></h2>


<?php echo validation_errors(); ?>
<?php echo form_open('posts/update'); ?>
	<input type="hidden" name="id" value="<?= $post['id'] ?>">
	<div class="form-group">
		<label for="">Title</label>
		<input type="text" class="form-control" name="title" placeholder="Add Title" value="<?= $post['title'] ?>">
	</div>
	<div class="form-group">
		<label for="">Title</label>
		<textarea  class="form-control" placeholder="Add body" name="body"><?=$post['body'] ?></textarea>
	</div>
	<div class="form-group">
		<label> Category </label>
		<select name="category_id" id="" class="form-control">
			<?php 
			foreach($categories as $category) :?>
				<option value="<?=$category['id']?>"><?php echo $category['name'] ?></option>
			<?php endforeach; ?>

		</select>
	</div>
	<button type="submit" class="btn btn-default ml-2">Submit</button>
</form>