<?php include_once 'config/init.php' ?>



<?php

$post = new Job;

$post_id = isset($_GET['id']) ? $_GET['id'] : null;

if (isset($_POST['submit'])) {

    // Create Data Array

    $data = array();

    $just = $_POST['post_id'];
    $data['title'] = $_POST['post_title'];
    $data['description'] = $_POST['post_description'];

    echo $just;

    if ($post->update($just, $data)) {

        header('Location: index.php');
    } else {

        echo "Failed";
    }
};



$template = new Template('templates/post-single.php');


$template->post = $post->getPost($post_id);

echo $template;
