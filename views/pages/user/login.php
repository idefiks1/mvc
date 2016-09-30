<?php
include (APP_PATH.'/views/layouts/header.php');
?>
<div class="container">
    <div class="bs-example" data-example-id="simple-ul">
        <form method="POST">
            <div id="message">
            	<p><label>Please, login</label></p>
                <label><?=$message;?></label>
            </div>
            <label>
                <p>Login</p>
            </label>
            <p><input type="text" name="login" class="form-control" id="login" placeholder="Login"></p>
            <label>
                <p>Password</p>
            </label>
            <p><input type="password" name="pass" class="form-control" id="pass" placeholder="Password"></p>
            <p><button type="submit" name="submit" class="btn btn-primary">Login</button></p>
        </form>
    </div>
</div>
<?php
include (APP_PATH.'/views/layouts/footer.php');
?>