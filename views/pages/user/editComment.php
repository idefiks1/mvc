<?php
include (APP_PATH.'/views/layouts/header.php');
?>
<div class="container">
	<div class="bs-example" data-example-id="simple-ul">
		<form  name="comment" method="post">
  			<br>
  			<p>
          <label for="comment">Edit and click Save.</label>
          <br>
          <label for="comment">Comment:</label>
          <textarea class="form-control" name="textComment" rows="5" id="comment"><?php echo $textComment;?></textarea>
  			</p>
  			<p>
        	<button type="submit" name="submit" method="post" class="btn">Save</button>
  			</p>
		</form>
	</div>
</div>
<?php
include (APP_PATH.'/views/layouts/footer.php');
?>