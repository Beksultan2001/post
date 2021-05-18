<?php include_once 'inc/header.php' ?>



<?php if (isset($_COOKIE['user'])) { ?>

    <div class="container">


        <div class="container_user">


            <div class="col-sm-2 col-md-4 col-lg-3  image">

                <img src="https://www.occrp.org/assets/common/staff/male.png">

            </div>

            <p>

                Сәлем, <span><?php echo $_COOKIE['user'] ?> </span> Осында көргенімізге қуаныштымыз !

            </p>

            <button class="cancel">Аккануттан шығу</button>


        </div>


    </div>

    <script src="../js/cancel.js"></script>

<?php } else {  ?>


    <div class="container">

        <p class="status"><?php echo $status; ?></p>
        <div class="form-structor">
            <form class="signup" action="../auth.php" method="POST">
                <h2 class="form-title" id="signup"><span>немесе</span>Тіркелу</h2>
                <div class="form-holder">
                    <input type="hidden" name="signup">
                    <input type="text" name="username" class="input" placeholder="Name" required />
                    <input type="email" name="email" class="input" placeholder="Email" required />
                    <input type="password" name="parol" class="input" placeholder="Password" required />
                </div>
                <button class="submit-btn" type="submit">Тіркелу</button>
            </form>
            <form class="login slide-up" action="../auth.php" method="POST">
                <div class="center">
                    <h2 class="form-title" id="login"><span>немесе</span>Кіру</h2>
                    <div class="form-holder">
                        <input type="hidden" name="signin">
                        <input type="text" name="username" class="input" placeholder="username" />
                        <input type="password" name="parol" class="input" placeholder="Password" />
                    </div>
                    <button class="submit-btn" type="submit">Кіру</button>
                </div>
            </form>
        </div>

    </div>

    <script src="js/auth.js"></script>

<?php } ?>



<?php include_once 'inc/footer.php' ?>