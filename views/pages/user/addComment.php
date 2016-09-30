<?php
include (APP_PATH.'/views/layouts/header.php');
?>
<script src='/js/addComment.js'>
</script>
<div class="container">
    <div class="bs-example" data-example-id="simple-ul">
        <form method="post" id = "add">
            <label for="comment">Headline:</label>
            <textarea class="form-control" name="headline" rows="1" id="headline" placeholder="headline" ></textarea>
            <label for="comment">Comment:</label>
            <textarea class="form-control" name="textComment" rows="5" id="textComment" placeholder="Comment"></textarea>
            <br>
            <button type="submit" class="btn btn-primary" id="submit" >Add comment</button>
            <div id="result"></div>
            <b><div id="result1"></div></b>
            <div id="result2"></div>
            <div class="progress" id="progressBar" style= "width: 400px;display: none;">
                <div class="progress-bar" id="div" style="height: 100%;display: none;">
                </div>
            </div>
        </form>
        <br>
        

    </div>
</div>
<?php
include (APP_PATH.'/views/layouts/footer.php');
?>