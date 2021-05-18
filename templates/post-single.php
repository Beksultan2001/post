<?php include_once 'inc/header.php'; ?>


<section class="post_single">
    <div class="container">


        <picture class="col-sm-9 col-md-8 post_image">
            <img src="uploads/<?php echo $post->img ?>" alt="">
        </picture>
        <p class="post_title"><span>Тақырып:</span> <?php echo $post->title ?></p>
        <p class="post_subtitle">
            <?php echo $post->description ?>
        </p>
        <div class="post_info">
            <p class="post_date">Пост салынды: <?php echo $post->post_date ?></p>
            <a href="index.php">Артқа қайту</a>
        </div>
        <div class="post_const">
            <a href="edit.php?id=<?php echo $post->id; ?>" class="post_edit">Өзгерту</a>
            <form action="index.php" method="POST">
                <input class="post_const_id" type="hidden" name="delete_id" value="<?php echo $post->id ?>">
                <input class="post_delete" type="submit" name="delete" value="Өшіру">
            </form>
        </div>


    </div>
</section>




<?php include_once 'inc/footer.php'; ?>