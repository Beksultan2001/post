<?php require_once 'config/init.php'; ?>
<?php include_once 'templates/inc/header.php' ?>


<?php



$job = new Job;

$temp = new Template('templates/myposts.php');

$temp->title = 'success';

// echo $job->getAllList();

$newarray = array();
$lists = $job->getAllList();

if ($lists) {


    foreach ($lists as $list) {


        if ($list->username == $_COOKIE['user']) {

            array_push($newarray, $list);
        }
    };
}



$temp->lists = $newarray;

echo $temp;
