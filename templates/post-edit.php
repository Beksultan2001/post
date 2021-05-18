<?php include_once 'inc/header.php' ?>;



<section class="container">

    <div class="col-sm-8">

        <form class="form" action="../post.php" method="POST" enctype="multipart/form-data">

            <div class="form_image col-md-6">

                <img src="uploads/<?php echo $post->img ?>" class="form_img_edit">

            </div>

            <label class="form_label" for="title">Тақырып</label>

            <input class="col-sm-3 col-md-6  form_title" value="<?php echo $post->title; ?>" type="text" name="post_title">
            <input type="hidden" name="post_id" value="<?php echo $post->id ?>">
            <label class="form_label" for="form_description">Коспект</label>
            <textarea class="col-sm-3 col-md-6  form_description" name="post_description" rows="3" cols="20">
                <?php echo $post->description ?>
            </textarea>
            <input class="col-sm-3 col-md-4 col-lg-2 form_btn" type="submit" name="submit" value="post">

        </form>
    </div>

</section>

<?php include_once 'inc/footer.php' ?>;