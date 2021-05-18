<?php include_once 'inc/header.php'; ?>



<?php

if (isset($_POST['post_message'])) {

    echo $_POST['post_message'];
}


?>


<section class="post_single">

    <div class="container">
        <a class="post_back" href="index.php"><i class="fas fa-arrow-left"></i></a>
        <picture class="col-sm-9 col-md-8 post_image">
            <img src="uploads/<?php echo $post->img ?>" alt="">
        </picture>
        <p class="post_title"><span>Тақырып:</span> <?php echo $post->title ?></p>


        <p class="post_subtitle">
            <?php echo $post->description ?>
        </p>

        <div class="post_info">
            <p class="card_username"><span>Aвтор: </span><?php echo $post->username; ?></p>
            <p class="post_date">Пост салынды: <?php echo $post->post_date ?></p>
        </div>

        <?php if ($_COOKIE['user']) { ?>

            <form class="post_form" method="POST" action="../common.php">

                <div class="post_set">

                    <input type="hidden" name="post_id" value="<?php echo $post->id; ?>">
                    <textarea name="post_message">
                    </textarea>
                    <button type="submit" class="post_btn">Send</button>

                </div>

            </form>

        <?php } else { ?>

            <a class="post_form_acc" href="auth.php">Коммент жазу...</a>

        <?php } ?>

        <h2 class="post_form_title">Comments</h2>

        <uL class="post_form_comment">

            <?php foreach ($comments as $list) : ?>

                <?php if ($list->post_id == $post->id) : ?>

                    <li>

                        <p class="comment_name"><?php echo $list->username ?></p>
                        <p class="comment_comment"><?php echo $list->comment ?></p>
                        <p class="comment_date"><?php echo $list->post_date; ?></p>
                        <?php if ($_COOKIE['user'] == $list->username) { ?>

                            <form method="POST" action="../common.php">
                                <input name="delete_id" type="hidden" value="<?php echo $list->id ?>">
                                <input name="delete_post_id" type="hidden" value="<?php echo $post->id; ?>">
                                <button name="comment_delete" type="submit" class="comment_delete"><i class="fas fa-trash-alt"></i></button>
                            </form>


                        <?php } ?>

                    </li>

                <?php endif; ?>

            <?php endforeach; ?>




        </uL>

    </div>

</section>




<?php include_once 'inc/footer.php'; ?>