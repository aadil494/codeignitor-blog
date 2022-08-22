<h2><?=$title?></h2>


<?php echo validation_errors(); ?>
<?php echo form_open('posts/create'); ?>
	<div class="form-group">
		<label for="">Title</label>
		<input type="text" class="form-control" name="title" placeholder="Add Title">
	</div>
	<div class="form-group">
		<label for="">Body</label>
		<textarea id="editor" class="form-control" placeholder="Add body" name="body"></textarea>
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
	<button type="submit" class="btn btn-primary mt-2">Submit</button>
	
	<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</form>