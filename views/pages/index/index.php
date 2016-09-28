<?php
include ('views/layouts/header.php');
    if($isLogged):
    {
    ?>
    <div class="container-fluid"">
        <div class="row">
            <div class="col-md-3 col-md-offset-3">
                <?php
                foreach ($com as $key => $value) 
                {
                ?>
                    <div class="bs-example" data-example-id="simple-ul">
                        <ul class="list-unstyled">
                            <b><?= $value['name']."\n"; ?></b>
                            <?php  
                            if(strlen($value['comment'])>50)
                            {
                            ?>
                                <div>
                                    <p><?=strCut($value['comment'],30,40);?></p>
                                    <a class="btn">View full...</a>
                                    <p id="hidden"><?= $value['comment'];?></p>
                                </div>  
                            <?php 
                            }
                            ?>   
                            <?php
                            if(strlen($value['comment'])<50)
                            {
                            ?>
                                <li>
                                    <h5><?= $value['comment']; ?></h5>
                                </li>
                            <?php 
                            }
                            ?>
                            <small><?= $value['date']."\n"; ?></small>
                            <p><a href = "user/editComment?id=<?= $value['id']; ?>" >Edit</a></p>
                        </ul>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-md-3 col-md-offset-3">
                <?php
                if(isset($_SESSION['id']))
                {
                ?>
                    <h4><a href="user/addComment"><?php echo "Add comment"; ?></a></h4>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    }
    else:
    ?>
        <div class="container-fluid"">
            <div class="row">
                <div class="col-md-3 col-md-offset-3">
                    <?php
                    foreach ($com as $key => $value) 
                    {
                    ?>
                        <div class="bs-example" data-example-id="simple-ul">
                            <ul class="list-unstyled">
                                <b><?= $value['name']."\n"; ?></b>
                                <?php  
                                if(strlen($value['comment'])>50)
                                {
                                ?>
                                    <div>
                                        <p><?=strCut($value['comment'],30,40);?></p>
                                        <a class="btn">View full...</a>
                                        <p id="hidden"><?= $value['comment'];?></p>
                                    </div>  
                                <?php 
                                }
                                ?>   
                                <?php
                                if(strlen($value['comment'])<50)
                                {
                                ?>
                                    <li>
                                        <h5><?= $value['comment']; ?></h5>
                                    </li>
                                <?php 
                                }
                                ?>
                                <small><?= $value['date']."\n"; ?></small>
                                <p><a href = "user/editComment?id=<?= $value['id']; ?>" >Edit</a></p>
                            </ul>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-md-3 col-md-offset-3">
                    <?php
                    if(isset($_SESSION['id']))
                    {
                    ?>
                        <h4><a href="user/addComment"><?php echo "Add comment"; ?></a></h4>
                    <?php
                    }        
                    ?>
                </div>
                <div class="col-md-3 col-md-offset-3">
                    <p>You ain't logged in.</p>
                </div>
                <div class="col-md-3 col-md-offset-3">
                    <?php
                    if(isset($_SESSION['id']))
                    {
                        ?>
                        <h4><a href="user/addComment"><?php echo "Add comment"; ?></a></h4>
                        <?php
                    }
                    ?>
                    <h4><a href="user/login">Login</a></h4>
                    <h4><a href="user/reg">Registration</a></h4>
                </div>
            </div>
        </div>
      
<?php
    endif;
    include ('views/layouts/footer.php');
?>