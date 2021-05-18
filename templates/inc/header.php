<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="icon" href="https://cdn-japantimes.com/wp-content/uploads/2020/02/b-tesla-a-20200205.jpg" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/header.css">
    <title><?php echo SITE_TITLE; ?></title>
</head>

<body>


    <?php if (isset($_COOKIE['user'])) { ?>


        <div class="mainsection">

            <header class="header">

                <div class="container">

                    <nav class="menu">

                        <div class="mainmenu">

                            <div class="menu_add">
                                <li><a href="index.php">Негігзі бет</a></li>
                                <li><a href="upload.php">Пост салу</a></li>
                                <li><a href="mypage.php">Менің постарым</a></li>
                            </div>
                            <li class="menu_auth">
                                <a href="auth.php">Логин</a>
                            </li>

                        </div>
                        <div>

                        </div>

                        <div class="menu_btn">
                            <i class="fas fa-bars"></i>
                        </div>

                    </nav>

                </div>

            </header>


        <?php } else {  ?>


            <div class="mainsection">

                <header class="header">

                    <div class="container">
                        <?php echo $test ?>

                        <nav class="menu">

                            <div class="mainmenu">

                                <div class="menu_add">
                                    <li><a href="index.php">Негігзі бет</a></li>

                                </div>
                                <li class="menu_auth">
                                    <a href="auth.php"> Логин</a>
                                </li>

                            </div>
                            <div>

                            </div>

                            <div class="menu_btn">
                                <i class="fas fa-bars"></i>
                            </div>

                        </nav>



                    </div>

                </header>


            <?php } ?>

            <script src="../../js/header.js"></script>