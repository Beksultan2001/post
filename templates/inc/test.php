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
    <link rel="stylesheet" href="../../css/style.css">
    <title><?php echo SITE_TITLE; ?></title>

</head>

<body>

    <?php
    $test = true;
    $just = 'one';
    ?>

    <?php if ($test) { ?>


        <div class="mainsection">

            <header class="header">

                <div class="container">
                    <nav class="menu">

                        <div class="menu_add">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="upload.php">Create post</a></li>
                        </div>
                        <li>
                            <a href="auth.php"> Auth</a>
                        </li>



                    </nav>

                </div>

            </header>




        <?php } else {  ?>


            <div class="mainsection">

                <header class="header">

                    <div class="container">
                        <?php echo $test ?>
                        <nav class="menu">

                            <div class="menu_add">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="upload.php">Create post</a></li>
                            </div>




                        </nav>

                    </div>

                </header>


            <?php } ?>