<?php include_once 'inc/header.php'; ?>


<section class="listItems">

    <?php echo $hello ?>

    <div class="container listItems_container">
        <div class="row">
            <?php foreach ($lists as $list) : ?>

                <div class="col-sm-5 col-md-5 col-lg-4 each">

                    <div class="card">

                        <img class="card_img" src="uploads/<?php echo $list->img ?>"></img>
                        <div class="card-body">
                            <h5 class="card_title">
                                <span>Тақырып: </span> <?php echo $list->title ?>
                            </h5>
                            <p class="card_date"><span>Пост салынды:</span> <?php echo $list->post_date; ?></p>
                            <a class="card_button" href="post.php?id=<?php echo $list->id ?>">Көру</a>
                        </div>

                    </div>


                </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>


<?php include_once 'inc/footer.php'; ?>