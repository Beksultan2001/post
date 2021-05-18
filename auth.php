<?php include_once 'config/init.php' ?>


<?php


$template = new Template('templates/manage.php');


$auth = new Auth;

if (isset($_POST['signup'])) {

    $data = array();
    $data['username'] = $_POST['username'];
    $data['parol'] = $_POST['parol'];
    $data['email'] = $_POST['email'];

    if (!$auth->test($_POST['username'])) {

        if ($auth->create($data)) {

            echo "success";

            $cookeiName = 'user';
            $username = $_POST['username'];

            setcookie($cookeiName, $username);

            $page = $_SERVER['PHP_SELF'];

            header("Location: $page");
        } else {

            $template->status = 'problema with server';
        }
    } else {
        $template->status =  "there is a already such a account";
    }
}


if (isset($_POST['signin'])) {

    $data = array();

    $data['parol'] = $_POST['parol'];
    $data['username'] = $_POST['username'];


    if ($auth->getUser($_POST['username'])) {

        // $namePerson =  $auth->getUser($_POST['email'])->username;

        $cookeiName = 'user';

        echo $data['username'];

        setcookie($cookeiName, $data['username']);

        $page = $_SERVER['PHP_SELF'];

        header("Location: $page");
    } else {

        $template->status = 'incorrect password or email';
    }
}




echo $template;
