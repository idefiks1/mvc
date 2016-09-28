<?php
include (APP_PATH.'/views/layouts/header.php');
?>
<div class="container">
    <div class="bs-example" data-example-id="simple-ul">
        <form method="post">
            <label for="comment">Comment:</label>
            <textarea class="form-control" name="textComment" rows="5" id="text_comment" placeholder="Comment"></textarea>
            <br>
            <button type="submit" class="btn btn-primary">Add comment</button>
        </form>
        <br>
    </div>
</div>
<?php
include (APP_PATH.'/views/layouts/footer.php');
?>