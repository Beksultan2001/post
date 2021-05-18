<?php include_once 'config/init.php' ?>



<?php

$com = new Comment;

if (isset($_POST['post_message'])) {

    $data = array();
    $id =  $_POST['post_id'];
    $data['post_id'] = $id;
    $data['comment'] = $_POST['post_message'];
    $data['username'] = $_COOKIE['user'];


    print_r($data);

    if ($com->create($data)) {

        echo "Success";
        // header("Location: index.php");
        // header("Location: common.php?id=$id");

    } else {
        echo "Failed";
    }

    header("Location: common.php?id=$id");
};



if (isset($_POST['delete_id'])) {


    $data = array();

    $post_id = $_POST['delete_post_id'];
    $id = $_POST['delete_id'];

    if ($com->delete($id)) {


        header("Location: common.php?id=$post_id");
    } else {

        echo "There is a problem";
    }
};



$post = new Job;

$post_id = isset($_GET['id']) ? $_GET['id'] : null;

$template = new Template('templates/common-single.php');

$list = $com->getAllList();

// print_r($list);
echo "<br>";

function test_odd($var)
{
    global $post_id;

    return ($var->post_id == $post_id);
}


$filter = array_filter($list, "test_odd");

$newlist = array();


$template->comments = $filter;

$template->post = $post->getPost($post_id);

echo $template;
