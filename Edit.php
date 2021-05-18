<?php include_once 'config/init.php'; ?>



<?php

$post_id = isset($_GET['id']) ? $_GET['id'] : null;

$post = new Job;



$template = new Template('templates/post-edit.php');


$template->post = $post->getPost($post_id);

echo $template;
