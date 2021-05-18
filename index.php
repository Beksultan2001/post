<?php require_once 'config/init.php'; ?>
<?php include_once 'templates/inc/header.php' ?>;


<?php

$job = new Job;

if (isset($_POST['delete_id'])) {

    $del_id = $_POST['delete_id'];

    if ($job->delete($del_id)) {

        echo 'success';
    } else {
        echo "failed";
    }


}



$temp = new Template('templates/frontpage.php');

$temp->title = 'success';


// echo $job->getAllList();

$temp->lists = $job->getAllList();

echo $temp;
