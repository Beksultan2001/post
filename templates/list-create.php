<?php include_once 'inc/header.php' ?>


<section class="container">

    <div class="col-sm-8">

        <form class="form" action="../upload.php" method="POST" enctype="multipart/form-data">

            <div class="form_image">

                <label for="my_image" class="label">

                    <i class="fas fa-images"></i>

                    Фото таңдау

                </label>

                <img class="form_img">

            </div>

            <input type="file" name="my_image" value="choose a file" class="my_image" accept=".jpg, .jpeg, .png" required>
            <label class="form_label" for="title">Tақырып</label>
            <input class="col-sm-3 col-md-6  form_title" type="text" name="title" required>
            <label class="form_label" for="form_description">Конспект</label>
            <textarea class="col-sm-3 col-md-6  form_description" name="form_description" rows="3" cols="20" required>
            </textarea>
            <input class="col-sm-3 col-md-4 col-lg-2 form_btn" type="submit" name="submit" value="post">
        </form>
    </div>

</section>



<?php include_once 'inc/footer.php' ?>;